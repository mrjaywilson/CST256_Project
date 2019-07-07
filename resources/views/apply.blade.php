@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

        </div>
        <div class="row justify-content-center">
            <div class="col">
                <div class="row p-2">
                    <h2>Application Successful!</h2>
                </div>
                <div class="row p-2">
                    <form action="{{url('jobsearch')}}" method="get">
                        @csrf
                        <div class="col">
                            <button type="submit" class="btn btn-primary" style="width: 200px">
                                Keep Searching
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection