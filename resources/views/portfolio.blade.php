@extends('layouts.app')

<style>
    input[type=text] {
        width: 450px;
    }
</style>

@section('content')
    <div class="container">
        <div class="row justify-content-center pb-3">

            <h2>Edit Portfolio</h2>
        </div>
        <div class="row justify-content-center">
            <form action="update-portfolio" method="POST">
                @csrf

                <p>Skills (separated by comma)</p>
                <div class="input-group pb-3 pr-1">
                    <input type="text" name="skills" value="{{ old('skills', $portfolio->skills) }}">
                </div>

                <hr>

                <h3>Job History</h3> <br/>
                (Up to 5 recent employers)

                <hr>

                <div class="input-group pb-3 pr-1">
                    <div class="container">

                        <div class="row">
                            <p>Employer #1</p>
                        </div>

                        <div class="row">
                            <input type="text" name="employer_one_name" value="{{ old('employer_one_name', $portfolio->employer_one_name) }}">
                        </div>
                        <div class="row pt-2">
                            <div class="col">
                                <div class="row">
                                    <p>Start Date</p>
                                </div>
                                <div class="row">
                                    <input type="date" name="employer_one_start" value="{{ old('employer_one_start', $portfolio->employer_one_start) }}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <p>End Date</p>
                                </div>
                                <div class="row">
                                    <input type="date" name="employer_one_end" value="{{ old('employer_one_end', $portfolio->employer_one_end) }}">
                                </div>
                            </div>
                        </div>
                        <div class="row pt-2">
                            Duties
                        </div>
                        <div class="row pt-2">
                            <input type="text" name="employer_one_duties" value="{{ old('employer_two_name', $portfolio->employer_one_duties) }}">
                        </div>

                        <div class="row pt-3">
                            <p>Employer #2</p>
                        </div>

                        <div class="row">
                            <input type="text" name="employer_two_name" value="{{ old('', $portfolio->employer_two_name) }}">
                        </div>
                        <div class="row pt-2">
                            <div class="col">
                                <div class="row">
                                    <p>Start Date</p>
                                </div>
                                <div class="row">
                                    <input type="date" name="employer_two_start" value="{{ old('employer_two_start', $portfolio->employer_two_start) }}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <p>End Date</p>
                                </div>
                                <div class="row">
                                    <input type="date" name="employer_two_end" value="{{ old('employer_two_end', $portfolio->employer_two_end) }}">
                                </div>
                            </div>
                        </div>
                        <div class="row pt-2">
                            Duties
                        </div>
                        <div class="row pt-2">
                            <input type="text" name="employer_two_duties" value="{{ old('employer_two_duties', $portfolio->employer_two_duties) }}">
                        </div>

                        <div class="row pt-3">
                            <p>Employer #3</p>
                        </div>

                        <div class="row">
                            <input type="text" name="employer_three_name" value="{{ old('employer_three_name', $portfolio->employer_three_name) }}">
                            <span style="color:red">
                            {{ $errors->first('name') }}
                        </span>
                        </div>
                        <div class="row pt-2">
                            <div class="col">
                                <div class="row">
                                    <p>Start Date</p>
                                </div>
                                <div class="row">
                                    <input type="date" name="employer_three_start" value="{{ old('employer_three_start', $portfolio->employer_three_start) }}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <p>End Date</p>
                                </div>
                                <div class="row">
                                    <input type="date" name="employer_three_end" value="{{ old('employer_three_end', $portfolio->employer_three_end) }}">
                                </div>
                            </div>
                        </div>
                        <div class="row pt-2">
                            Duties
                        </div>
                        <div class="row pt-2">
                            <input type="text" name="employer_three_duties" value="{{ old('employer_three_duties', $portfolio->employer_three_duties) }}">
                        </div>

                        <div class="row pt-3">
                            <p>Employer #4</p>
                        </div>

                        <div class="row">
                            <input type="text" name="employer_four_name" value="{{ old('employer_four_name', $portfolio->employer_four_name) }}">
                        </div>
                        <div class="row pt-2">
                            <div class="col">
                                <div class="row">
                                    <p>Start Date</p>
                                </div>
                                <div class="row">
                                    <input type="date" name="employer_four_start" value="{{ old('employer_four_start', $portfolio->employer_four_start) }}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <p>End Date</p>
                                </div>
                                <div class="row">
                                    <input type="date" name="employer_four_end" value="{{ old('employer_four_end', $portfolio->employer_four_end) }}">
                                </div>
                            </div>
                        </div>
                        <div class="row pt-2">
                            Duties
                        </div>
                        <div class="row pt-2">
                            <input type="text" name="employer_four_duties" value="{{ old('employer_four_duties', $portfolio->employer_four_duties) }}">
                        </div>

                        <div class="row pt-3">
                            <p>Employer #5</p>
                        </div>

                        <div class="row">
                            <input type="text" name="employer_five_name" value="{{ old('employer_five_name', $portfolio->employer_five_name) }}">
                        </div>
                        <div class="row pt-2">
                            <div class="col">
                                <div class="row">
                                    <p>Start Date</p>
                                </div>
                                <div class="row">
                                    <input type="date" name="employer_five_start" value="{{ old('employer_five_start', $portfolio->employer_five_start) }}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <p>End Date</p>
                                </div>
                                <div class="row">
                                    <input type="date" name="employer_five_end" value="{{ old('employer_five_end', $portfolio->employer_five_end) }}">
                                </div>
                            </div>
                        </div>
                        <div class="row pt-2">
                            Duties
                        </div>
                        <div class="row pt-2">
                            <input type="text" name="employer_five_duties" value="{{ old('employer_five_duties', $portfolio->employer_five_duties) }}">
                        </div>
                    </div>
                </div>

                <hr>

                <h3>Education</h3>

                <hr>

                <div class="container">
                    <div class="row pb-3">
                        School Name
                    </div>
                    <div class="row input-group pb-3 pt-1">
                        <input type="text" name="school_name" value="{{ old('school_name', $portfolio->school_name) }}">
                    </div>
                    <div class="row pb-3">
                        Years Attended
                    </div>
                    <div class="row pb-3">
                        <div class="col">
                            <div class="row">
                                From
                            </div>
                            <div class="row">
                                <input type="date" name="school_start" value="{{ old('school_start', $portfolio->school_start) }}">
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                To
                            </div>
                            <div class="row">
                                <input type="date" name="school_end" value="{{ old('school_end', $portfolio->school_end) }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        Degree Earned
                    </div>
                    <div class="row input-group pb-3 pt-2">
                        <input type="text" name="degree" value="{{ old('degree', $portfolio->degree) }}">
                    </div>
                </div>
                <div class="row pt-3">
                    <input type="hidden" name="portid" value="{{ old('portid', $portfolio->id) }}">
                    <button class="btn btn-primary" style="width: 450px">
                        Save Portfolio
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection