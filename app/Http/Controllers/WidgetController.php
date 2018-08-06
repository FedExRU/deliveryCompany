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

use Carbon\Carbon;

class WidgetController extends Controller
{
    public function order(AjaxOrderRequest $request)
    {
    	if($request->ajax())
    	{
            try {

    		  $good = Goods::find($request->input('good_id'));

    		  $order = new Orders();

            } catch (Exception $e) {
                /**
                 * @todo exception handler
                 */
            }

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
            try {

                $orderData = (array)json_decode($request->input('order'));

                $orderHydrate = Orders::hydrate([$orderData]);

                $orderHydrate->flatten();

                $order = $orderHydrate[0];

                $orderDate = Carbon::parse($order->created_at)->format('d.m.Y H:i');
                
            } catch (Exception $e) {
                /**
                 * @todo exception handler
                 */
            }

            return view('layout.part.modal-order-success', [
                'order'     => $order,
                'orderDate' => $orderDate,
            ]);
        }
    }
}
