<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdersController extends Controller
{

    public function orderList()
    {
        return view('admin.layouts.orders');
    }

}
