<?php

namespace App\Http\Controllers;

use App\Http\Requests\{
    AjaxOrderRequest, 
    AjaxOrderSuccessRequest
};

use App\Models\{
    Goods, 
    Orders
};

class WidgetController extends Controller
{
    public function order(AjaxOrderRequest $request)
    {
    	if($request->ajax())
    	{
    		$good = Goods::find($request->input('good_id'));

    		$order = new Orders();

    		return view('layout.part.modal-form',[
    			'good' => $good,
    			'order' => $order,
    		]);
    	}
    }

    public function orderSuccess(AjaxOrderSuccessRequest $request)
    {
        if($request->ajax())
        {
            $object = (array)json_decode($request->input('good'));
            $collection = Goods::hydrate($object);
        }
    }
}
