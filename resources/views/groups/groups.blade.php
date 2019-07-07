@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <h2>Groups</h2>
        </div>
        <div class="row justify-content-left">
            <div class="col">
                <div class="row">
                    <div class="col">
                        <strong>My Groups</strong>&nbsp;(<a href="new-group">Create Group</a>)
                    </div>
                </div>
                <div class="row">
                    @if(count($joined) != 0)
                        @foreach($joined as $jgroup)
                                <div class="col-sm-4">
                                    <li>
                                        <a href="viewgroup/{{ $jgroup->group_name }}">{{ $jgroup->group_name }}</a>
                                        @if($jgroup->user_id == Auth::user()->id)
                                            *
                                        @endif
                                    </li>
                                </div>
                        @endforeach
                    @else
                        {{ __('You are not part of any group. Create or Join one now!') }}
                    @endif
                </div>
                <div class="row pt-5">
                    <div class="col">
                        <strong>Explore All Groups</strong>
                    </div>
                </div>
                <div class="row">
                    @if(count($groups) != 0)
                        @foreach($groups as $group)
                            <div class="col-sm-4">
                                <li>
                                    <a href="viewgroup/{{ $group->group_name }}">{{ $group->group_name }}</a>
                                    @if($group->creator == 1)
                                        *
                                    @endif
                                </li>
                            </div>
                        @endforeach
                    @else
                        {{ __('No current groups to explore. Why not create one!') }}
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection