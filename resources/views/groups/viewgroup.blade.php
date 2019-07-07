@extends('layouts.app')

@section('content')
    <div class="row justify-content-center pt-3 pb-2">
        <h2>Group: {{ $group->group_name }}</h2>
    </div>
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <div class="row p-2">
                <strong>Description</strong>
            </div>
            <div class="row p-2">
                {{ $group->description }}
            </div>
            <div class="row p-2" style="width: 450px">
                <div class="col-sm-6">
                    <div class="row">
                        <strong>Members</strong>
                    </div>

                    <div class="row">
                        <?php

                        $thisgroup = \App\JoinedGroup::where('group_id', $group->id)->get();
                        $userlist = \App\User::all();
                        $memberlist = array();

                        foreach ($thisgroup as $g) {
                            $user = \App\User::where('id', $g->user_id)->get();

                            if (count($user) > 0) {
                                array_push($memberlist, $user[0]->name);
                            }
                        }

                        ?>

                        @foreach($memberlist as $member)
                            <div class="col-xs-4 p-2">
                                <li>{{ $member }}</li>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row p-2">
                @if(\App\Http\Controllers\GroupController::isCreator($group))
                    <form action="{{ url('deletegroup') }}" METHOD="POST">
                        @csrf
                        <input type="hidden" value="{{ $group->id }}" name="group_id">
                        <div class="col">
                            <button type="submit" class="btn btn-danger" style="width: 150px">
                                Delete Group
                            </button>
                        </div>
                    </form>
                @elseif(\App\Http\Controllers\GroupController::hasJoined($group))
                    <form action="{{ url('leavegroup') }}" METHOD="POST">
                        @csrf
                        <input type="hidden" value="{{ $group->id }}" name="group_id">
                        <div class="col">
                            <button type="submit" class="btn btn-danger" style="width: 150px">
                                Leave Group
                            </button>
                        </div>
                    </form>
                @else
                    <form action="{{ url('joingroup') }}" METHOD="POST">
                        @csrf
                        <input type="hidden" value="{{ $group->id }}" name="group_id">
                        <div class="col">
                            <button type="submit" class="btn btn-primary" style="width: 150px">
                                Join Group
                            </button>
                        </div>
                    </form>
                @endif
                    <div class="col">
                        <a href="{{ url('groups') }}" class="btn btn-primary" style="width: 150px">Back to Groups</a>
                    </div>
            </div>
        </div>
    </div>
@endsection