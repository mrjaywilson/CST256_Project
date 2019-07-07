@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <h2>User Admin</h2>
        </div>
        <div class="row justify-content-center">
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <form action="edit" METHOD="POST">
                                    <button class="btn btn-primary" value="{{ $user->id }}" name="edit" style="width: 100%">Edit Profile</button>
                                    @csrf
                                </form>
                            </td>
                            <td>
                                @if($user->banned_until > now())
                                    <form action="unsuspend" METHOD="POST">
                                        <button class="btn btn-danger" value="{{ $user->id }}" name="unsuspend" style="width: 100%">Unsuspend</button>
                                        @csrf
                                    </form>
                                @else
                                    <form action="suspend" METHOD="POST">
                                        <button class="btn btn-primary" value="{{ $user->id }}" name="suspend" style="width: 100%">Suspend</button>
                                        @csrf
                                    </form>
                                @endif
                            </td>
                            <td>
                                <form action="delete" METHOD="POST">
                                    <button class="btn btn-primary" value="{{ $user->id }}" name="delete" style="width: 100%">Delete</button>
                                    @csrf
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </form>
        </div>
    </div>
@endsection