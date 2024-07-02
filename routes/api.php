<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Rotaları
|--------------------------------------------------------------------------
|
| Bu dosyada, uygulamanız için API rotalarını kaydedebilirsiniz. Bu
| rotalar RouteServiceProvider tarafından yüklenecek ve "api" middleware
| grubu tarafından korunacaktır.
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
