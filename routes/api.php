<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('config',function(){
    $responseString = '';
    $inputs = \App\input::all();

    foreach($inputs as $input){

      if($input->status == 'on'){
$responseString .= 1;
} else $responseString .= 0;
        
   }

    return $responseString;
});
