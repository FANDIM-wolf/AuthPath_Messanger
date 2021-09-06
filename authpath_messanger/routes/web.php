<?php

use Illuminate\Support\Facades\Route;
use App\Http\Conttrollers\MainController;

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

Route::get('/','MainController@check_auth_data_and_show_main_page')->name('index');
Route::get('/dialog/{id}','MainController@open_dialog_with_user_and_write_down_this_dialog_in_their_contacts')->name('dialog');