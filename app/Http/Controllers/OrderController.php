<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders;
use App\Http\Requests\OrderRequest;
use App\Models\StatusInfo;
use Carbon\Carbon;

class OrderController extends Controller
{
    public function store(OrderRequest $request)
    {
    	$order = new Orders();
    	
    	$order->loadAttributes($request->all());

    	$order->status_id = StatusInfo::STATUS_NEW;

    	try 
    	{
    		$order->save();

    		\Session::flash('orderStatus', true);
    		
    	} 
    	catch (\Exception $e) 
    	{
    		\Session::flash('orderStatus', false);
    	}

    	if(!$request->ajax())
	    	return redirect()->route('order.status', ['id' => $order->id]);
    }

    public function status($id = null)
    {	
    	if(is_null(\Session('orderStatus')))
    		return redirect()->route('catalog.index');

    	$order = Orders::find($id);

		return view('layout.pages.order-status', [
			'orderId' => is_null($order) ? null : $order->id,
	    	'goodName' => is_null($order) ? null : $order->good->name,
	    	'orderDate' => is_null($order) ? null : Carbon::parse($order->created_at)->format('d.m.Y H:i')
	    ]);
    }
}
