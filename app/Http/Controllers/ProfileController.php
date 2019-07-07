<?php

namespace App\Http\Controllers;

use App\Portfolio;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class ProfileController extends Controller
{
    public function index() {
        $user = Auth::user();

        if ($user != null) {
            return view('profile')->with('user', $user);
        } else {
            return view('welcome');
        }
    }

    public function unsuspend() {
        $id = Input::get('unsuspend');

        $date = now();

        User::where('id', $id)->update([
            'banned_until' => $date
        ]);

        return Redirect::back();
    }

    public function delete() {
        $id = Input::get('delete');

        User::where('id', $id)->delete();

        return Redirect::back();
    }

    public function suspend() {
        $id = Input::get('suspend');

        $date = date('Y-m-d H:i:s', (time() + 864000));

        User::where('id', $id)->update([
            'banned_until' => $date
        ]);

        return Redirect::back();
    }

    public function edit() {

        $id = Input::get('edit');


        $user = User::find($id);

        return view('profile')->with('user', $user);
    }

    public function update() {

        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required|min:5|max:5',
            'phone' => 'required|min:10|max:10',
        ]);

        $user = Auth::user();

        User::where('id', $user->id)->update([
            'name' => request('name'),
            'email' => request('email'),
            'city' => request('city'),
            'state' => request('state'),
            'zip' => request('zip'),
            'phone' => request('phone')
        ]);

        $portfolio = Portfolio::find($user->id);

        if ($portfolio == null) {
            Portfolio::create([
                'id' => $user->id
            ]);
        }

        return view('home');
    }
}
