@extends('layouts.app')

<style>
    input[type="text"] {
        width: 200px;
    }

    textarea {
        width: 200px;
    }

    #required {
        color: red;
    }
</style>

@section('content')
    <div class="container">
        <div class="row justify-content-center">

        </div>
        <div class="row justify-content-center">
            <form action="creategroup" method="post">
                @csrf

                <h2>Create New Group</h2> <br/>
                All fields required.

                <div class="col">
                    <div class="row p-2">
                        <div class="col">
                            Group Name<span id="required">*</span><br/>
                            <span id="required">
                                {{ $errors->first('group_name') }}
                            </span>
                        </div>
                        <div class="col">
                            <input type="text" name="group_name" value="{{ old('group_name') }}">
                        </div>
                    </div>
                    <div class="row p-2" style="width: 450px">
                        <div class="col">
                            Group Description<span id="required">*</span><br/>
                            <span id="required">
                                {{ $errors->first('description') }}
                            </span>
                        </div>
                        <div class="col">
                            <textarea name="description" rows="5">{{ trim(old('description')) }}</textarea>
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col">
                            <button type="submit" class="btn btn-primary" style="width: 150px">
                                Create Group
                            </button>
                        </div>
                        <div class="col">
                            <a href="{{ url()->previous() }}" class="btn btn-primary" style="width: 150px">Cancel</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection