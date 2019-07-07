@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

        </div>
        <div class="row justify-content-center">
                <h2>{{ $job->job_title }}</h2>
                <div class="col">
                    <div class="row p-2">
                        {{ $job->company_name }}
                    </div>
                    <div class="row p-2">
                        {{ $job->salary }}
                    </div>
                    <div class="row p-2" style="width: 450px">
                        {{ $job->description }}
                    </div>
                    <div class="row p-2">
                        <i class="fa fa-envelope-o"></i> &nbsp; &nbsp; <a href="mailto:{{ $job->contact_email }}?subject={{ $job->job_title }}">{{ $job->contact_email }}</a>
                    </div>
                    <div class="row p-2">
                        @if(Auth::user()->admin == 1)
                            <form action="edit-job" method="post">
                                @csrf
                                <div class="col">
                                    <button type="submit" class="btn btn-primary" style="width: 100px">
                                        Edit Job
                                    </button>
                                </div>
                            </form>
                        @else
                            <form action="{{url('apply')}}" method="post">
                                @csrf
                                <div class="col">
                                    <button type="submit" class="btn btn-primary" style="width: 130px">
                                        Quick Apply
                                    </button>
                                </div>
                            </form>
                        @endif
                            <div class="col">
                                <a href="{{ url()->previous() }}" class="btn btn-primary" style="width: 130px">Back</a>
                            </div>
                    </div>
                </div>
        </div>
    </div>
@endsection