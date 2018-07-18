<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Goods;

class CatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $goods = Goods::paginate(15);

        return view('layout.pages.catalog-index', [
            'title' => 'Catalog',
            'goods' => $goods,
        ]);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $good = Goods::find($id);

        if(empty($good))
            abort(404, 'Sorry, but the product which are you looking for not found...');

        return view('layout.pages.catalog-show', [
            'title' => $good->name,
            'good' => $good,
        ]);
    }
}
