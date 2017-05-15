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

use App\Mail\Welcome as WelcomeEmail;
use App\User;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('welcome');
});

Route::get('posts', function() {
    $users = User::all();

    return view('posts', compact('users'));
});

Route::get('welcome', function () {
    $user = new \App\User([
        'name' => 'Duilio Palacios',
        'email' => 'duilio@example.com',
    ]);

    Mail::to($user->email, $user->name)
        ->send(new WelcomeEmail($user));
});

Auth::routes();

Route::get('/home', 'HomeController@index');
