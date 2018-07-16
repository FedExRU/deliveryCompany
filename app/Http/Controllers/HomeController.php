<?php

namespace App\Http\Controllers;

use app\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
    	return view('layout.pages.index', [
    		'title' => 'Your desires within the available limits',
    	]);
    }
}
