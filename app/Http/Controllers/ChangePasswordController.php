<?php

namespace App\Http\Controllers;

class ChangePasswordController extends Controller
{
    public function showChangePasswordForm()
    {
        return view('setting.change_password');
    }

}
