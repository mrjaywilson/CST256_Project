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
            <form action="createjob" method="post">
                @csrf

                <h2>Add New Job</h2> <br/>
                All fields required.

                <div class="col">
                    <div class="row p-2">
                        <div class="col">
                            Job Title<span id="required">*</span><br/>
                            <span id="required">
                                {{ $errors->first('job_title') }}
                            </span>
                        </div>
                        <div class="col">
                            <input type="text" name="job_title" value="{{ old('job_title') }}">
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col">
                            Company Name<span id="required">*</span><br/>
                            <span id="required">
                                {{ $errors->first('company_name') }}
                            </span>
                        </div>
                        <div class="col">
                            <input type="text" name="company_name" value="{{ old('company_name') }}">
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col">
                            Salary<span id="required">*</span><br/>
                            <span id="required">
                                {{ $errors->first('salary') }}
                            </span>
                        </div>
                        <div class="col">
                            <input type="text" name="salary" value="{{ old('salary') }}">
                        </div>
                    </div>
                    <div class="row p-2" style="width: 450px">
                        <div class="col">
                            Description<span id="required">*</span><br/>
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
                            Contact Email<span id="required">*</span><br/>
                            <span id="required">
                                {{ $errors->first('contact_email') }}
                            </span>
                        </div>
                        <div class="col">
                            <input type="text" name="contact_email" value="{{ old('contact_email') }}">
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col">
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