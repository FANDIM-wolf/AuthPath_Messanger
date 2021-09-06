<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class MainController extends Controller
{
    //get main page , before it check auth data
    public function check_auth_data_and_show_main_page()
    {
        return view('index');
    }
    public function open_dialog_with_user_and_write_down_this_dialog_in_their_contacts($id){
        $user = user::findOrFail($id);

        return view('dialog',['user'=>$user]);
    }
}

