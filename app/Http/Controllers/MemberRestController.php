<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

class MemberRestController extends Controller
{
    public function index()
    {
        $users = User::all();

        $restdata = json_encode($users);

        echo $restdata;
    }

    public function show($id)
    {
        $users = User::find($id);

        $restdata = json_encode($users);

        echo $restdata;
    }
}
