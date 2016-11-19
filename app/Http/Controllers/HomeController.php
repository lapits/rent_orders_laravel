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
    
    public function sendRentRequest(Request $request)
    {
//        $rules  = [
//            'room_space' => 'required|validate'
//            
//        ];
//        $this->validate($request, $rules);
//
//        //dump($request->all());
//        $data   = $request->all();
//        
//        $message    = new Message;
//        $message->fill($data);
//        
//        /*$message->save();*/
//                
        return Response;
        
    }
}
