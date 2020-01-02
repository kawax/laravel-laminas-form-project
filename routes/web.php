<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Forms\SampleForm;
use Illuminate\Http\Request;

Route::get('/', function () {
    $form = new SampleForm('sample');

    return view('welcome')->with(compact('form'));
});

Route::post('/', function (Request $request) {
    //dd($request->all());
    return back()->withInput();
});
