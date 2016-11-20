<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', ['uses' => 'HomeController@index', 'as' => 'home']);

//Route::post('/', ['uses' => 'HomeController@sendRentRequest', 'as' => 'sendRentRequest']);

Route::post('/sendRentRequest', function(){
    
    if(Request::ajax()){
        //return Response::json(Request::all());
        
        $message = new \App\Models\Message;

        $message->message = 'это тест';

        $saved  = $message->save();
        
        if ($saved) {
            return 'ok';
        }
        else {
            return 'not ok';
        }
    }
    
});

Route::get('/logout', 'Auth\LoginController@logout');

Auth::routes();


