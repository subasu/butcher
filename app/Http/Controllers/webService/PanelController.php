<?php

namespace App\Http\Controllers\webService;

use App\Models\Basket;
use App\Models\Order;
use Hekmatinasser\Verta\Verta;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Exceptions\JWTException;
use JWTAuth;
class PanelController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('jwt.auth', ['only' => ['userOrders']]);
    }
    //below function is related to show user orders
    public function userOrders()
    {
        if (!$user = JWTAuth::parseToken()->authenticate())
        {
            return response()->json(['message' => 'user not found']);
        }
        else
            {
                $data = Order::where([['user_id', $user->id], ['pay', '<>', null], ['transaction_code', '<>', null]])->get();
                $baskets = Basket::find($data[0]->basket_id);
                foreach ($data as $datum) {
                    $datum->orderDate = $this->toPersian($datum->created_at->toDateString());
                }
                if(count($baskets) > 0)
                {
                    return response()->json(compact('data','baskets'));
                }
                else
                {
                    return response()->json(['message => no match found']);
                }
            }
    }

    public function toPersian($date)
    {
        if (count($date) > 0) {
            $gDate = $date;
            if ($date = explode('-', $gDate)) {
                $year = $date[0];
                $month = $date[1];
                $day = $date[2];
            }
            $date = Verta::getJalali($year, $month, $day);
            $myDate = $date[0] . '/' . $date[1] . '/' . $date[2];
            return $myDate;
        }
        return;
    }

    //below function is related to show order detail
    public function orderDetails($id)
    {
        $comments = Basket::find($id)->orders->comments;
        $baskets = Basket::find($id);
        if (count($baskets) > 0) {
            foreach ($baskets->products as $basket){
                $basket->product_price = $basket->pivot->product_price;
                $basket->basket_id = $basket->pivot->basket_id;
                $basket->basketComment = $basket->pivot->comments;
                $basket->basketCount = $basket->pivot->count;
            }
            return response()->json(compact('baskets',  'comments'));
        } else {
            return response()->json(['message' => 'no match found']);
        }
    }

}
