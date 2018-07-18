<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders;
use App\Http\Requests\OrderRequest;

class OrderController extends Controller
{
    public function store(OrderRequest $request)
    {
    	$order = new Orders();
    	$order->loadAttributes($request->all());


    	dd($order);
    }
}
