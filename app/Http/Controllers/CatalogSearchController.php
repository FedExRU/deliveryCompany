<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogSearchController extends Controller
{
	public function search(Request $request)
	{
		dd($request);
	}
        //     if(!is_null($query = $request->input('q')))
        //     $goods = Goods::search($query)->paginate(15);
        // else}
}
