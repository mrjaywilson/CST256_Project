@extends('layouts.app')

<?php

        $currentUser = \Illuminate\Support\Facades\Auth::user();

?>

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <form action="profile" method="POST">

                @if($user->phone == null)
                    <h2>Complete Profile</h2>
                @else
                    <h2>Update Profile</h2>
                @endif

                <p>Name:</p>
                <div class="input-group pb-3 pr-1">
                    <input type="text" name="name" value="{{ $user->name }}">
                    <span style="color:red">
                        {{ $errors->first('name') }}
                    </span>
                </div>

                <p>Email:</p>
                <div class="input-group pb-3">
                    <input type="text" name="email" value="{{ $user->email }}">
                    <span style="color:red">
                        {{ $errors->first('email') }}
                    </span>
                </div>

                <p>City:</p>
                <div class="input-group pb-3">
                    <input type="text" name="city" value="{{ $user->city }}">
                    <span style="color:red">
                        {{ $errors->first('city') }}
                    </span>
                </div>

                <p>State:</p>
                <div class="input-group pb-3">
                    <input type="text" name="state" value="{{ $user->state }}">
                    <span style="color:red">
                        {{ $errors->first('state') }}
                    </span>
                </div>

                <p>Zip Code:</p>
                <div class="input-group pb-3">
                    <input type="text" name="zip" value="{{ $user->zip }}">
                    <span style="color:red">
                        {{ $errors->first('zip') }}
                    </span>
                </div>

                @if($currentUser->admin == 1)
                        <p>Admin Role:</p>
                        <div class="input-group pb-3">
                            <select name="admin">
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                            <span style="color:red">
                                {{ $errors->first('zip') }}
                            </span>
                        </div>
                @else
                    <div></div>
                @endif

                <p>Phone Number:</p>
                <div class="input-group pb-3">
                    <input type="text" name="phone" value="{{ $user->phone }}">
                    <span style="color:red">
                        {{ $errors->first('phone') }}
                    </span>
                </div>

                <button type="submit" class="btn btn-primary" name="userid" value="{{ $user->id }}">Save</button>

                @if($user->phone != null)
                    <a class="btn btn-primary" href="{{ 'home' }}">Cancel</a>
                @endif

                @csrf
            </form>
        </div>
    </div>
@endsection