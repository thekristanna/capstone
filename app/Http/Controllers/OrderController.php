<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Kyslik\ColumnSortable\Sortable;

class OrderController extends Controller
{
    ////_____SHOPPER ORDER SECTION____////-------------will need to consult
    public function shopper_add_order(string $id, request $r)
    {
        $order = new Order;
        $order->collect_op = $r->input('collect_op');
        $order->payment = $r->input('payment');
        $order->price = $r->input('price');
        $order->seller_id = $id;
        $order->shopper_id = Session::get('user_id');
        $order->status_seller = "Order Submitted";
        $order->status_shopper = "Waiting Confirmation";

        $order->save();

        return redirect('');
    }

    public function shopper_current_order()
    {
        return view('shopper_current_order');
    }

    public function shopper_previous_order()
    {
        return view('shopper_previous_order');
    }

    ////_____SELLER ORDER SECTION_____////
    public function seller_current_order_view()
    {
        return view('seller_current_order');
    }

    public function seller_prev_order_view()
    {
        return view('seller_previous_order');
    }
}
