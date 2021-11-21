<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{



     public function orderList()
    {
        return view('admin.layouts.order-list');

    }

     public function productList()
    {
        return view('admin.layouts.product-list');

    }



    public function productCreate()
    {
        return view('admin.layouts.add-member');

    }



}
