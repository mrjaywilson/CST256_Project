@extends('layouts.app')

<style>
    input[type="text"] {
        width: 200px;
    }

    textarea {
        width: 200px;
    }
</style>

@section('content')
    <div class="container">
        <div class="row justify-content-center">

        </div>
        <div class="row justify-content-center">
            <form action="savejob" method="post">
                @csrf

                <h2>Edit Job</h2>
                <div class="col">
                    <div class="row p-2">
                        <div class="col">
                            Job Title
                        </div>
                        <div class="col">
                            <input type="text" name="job_title" value="{{ old('job_title', $job->job_title) }}">
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col">
                            Company Name
                        </div>
                        <div class="col">
                            <input type="text" name="company_name" value="{{ old('company_name', $job->company_name) }}">
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col">
                            Salary
                        </div>
                        <div class="col">
                            <input type="text" name="salary" value="{{ old('salary', $job->salary) }}">
                        </div>
                    </div>
                    <div class="row p-2" style="width: 450px">
                        <div class="col">
                            Description
                        </div>
                        <div class="col">
                            <textarea name="description" rows="5">{{ trim(old('description', $job->description)) }}</textarea>
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col">
                            Contact Email
                        </div>
                        <div class="col">
                            <input type="text" name="contact_email" value="{{ old('contact_email', $job->contact_email) }}">
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col">
                            <input type="hidden" value="{{ $job->id }}" name="edit">
                            <button type="submit" class="btn btn-primary" style="width: 100px">
                                Save Job
                            </button>
                        </div>
                        <div class="col">
                            <a href="{{ url()->previous() }}" class="btn btn-primary" style="width: 100px">Back</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection