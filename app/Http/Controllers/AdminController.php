<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    public function userlist() {

        $user = Auth::user();

        if ($user != null && $user->admin != false) {
            $users = User::all();

            return view('admin.admin', [
                'users' => $users,
            ]);
        } else {
            return view('admin.noauth');
        }
    }
}
