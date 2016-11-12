<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    {
        $title = 'Лист заказа';
        $pagetitle = 'Лист заказа';
         
        return view('pages.index',  compact('title','pagetitle'));
    }
    
}
