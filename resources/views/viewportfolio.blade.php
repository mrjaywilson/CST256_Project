@extends('layouts.app')

<style>
    input[type=text] {
        width: 450px;
    }
</style>

@section('content')
    <div class="container">
        <div class="row justify-content-center pb-3">

            <h2>My Portfolio</h2>
        </div>
        <div class="row justify-content-center">
            <form action="portfolio" method="POST">
                <p>Skills</p>
                <div class="pb-3 pr-1">
                    <?php

                        $skills = explode(',', trim($portfolio->skills));
                    ?>

                    @foreach($skills as $skill)
                        @if($skill != "")
                            <li>
                                {{ $skill }}
                            </li>
                        @else
                            <strong>No Skills yet.</strong>
                        @endif
                    @endforeach
                </div>

                <hr>
                <h3>Job History</h3>
                <hr>

                <div class="input-group pb-3 pr-1">
                    <div class="container">

                        <div class="row">
                            <p><strong>{{ $portfolio->employer_one_name }}</strong></p>
                        </div>

                        <div class="row pt-2">
                            <div class="col">
                                <div class="row">
                                    <p>Start Date</p>
                                </div>
                                <div class="row">
                                    <p>
                                        {{ $portfolio->employer_one_start }}
                                    </p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <p>End Date</p>
                                </div>
                                <div class="row">
                                    <p>{{ $portfolio->employer_one_end }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row pt-2">
                            Duties
                        </div>
                        <div class="row pt-2">
                            <p>{{ $portfolio->employer_one_duties }}</p>
                        </div>

                        <div class="row pt-3">
                            <p><strong>{{ $portfolio->employer_two_name }}</strong></p>
                        </div>
                        <div class="row pt-2">
                            <div class="col">
                                <div class="row">
                                    <p>Start Date</p>
                                </div>
                                <div class="row">
                                    <p>{{ $portfolio->employer_two_start }}</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <p>End Date</p>
                                </div>
                                <div class="row">
                                    <p>{{ $portfolio->employer_two_end }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row pt-2">
                            Duties
                        </div>
                        <div class="row pt-2">
                            <p>{{ $portfolio->employer_two_duties }}</p>
                        </div>

                        <div class="row pt-3">
                            <p><strong>{{ $portfolio->employer_three_name }}</strong></p>
                        </div>

                        <div class="row pt-2">
                            <div class="col">
                                <div class="row">
                                    <p>Start Date</p>
                                </div>
                                <div class="row">
                                    <p>{{ $portfolio->employer_three_start }}</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <p>End Date</p>
                                </div>
                                <div class="row">
                                    <p>{{ $portfolio->employer_three_end }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row pt-2">
                            Duties
                        </div>
                        <div class="row pt-2">
                            <p>{{ $portfolio->employer_three_duties }}</p>
                        </div>

                        <div class="row pt-3">
                            <p><strong>{{ $portfolio->employer_four_name }}</strong></p>
                        </div>

                        <div class="row pt-2">
                            <div class="col">
                                <div class="row">
                                    <p>Start Date</p>
                                </div>
                                <div class="row">
                                    <p>{{ $portfolio->employer_four_start }}</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <p>End Date</p>
                                </div>
                                <div class="row">
                                    <p>{{ $portfolio->employer_four_end }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row pt-2">
                            Duties
                        </div>
                        <div class="row pt-2">
                            <p>{{ $portfolio->employer_four_duties }}</p>
                        </div>

                        <div class="row pt-3">
                            <p><strong>{{ $portfolio->employer_five_name }}</strong></p>
                        </div>

                        <div class="row pt-2">
                            <div class="col">
                                <div class="row">
                                    <p>Start Date</p>
                                </div>
                                <div class="row">
                                    <p>{{ $portfolio->employer_five_start }}</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <p>End Date</p>
                                </div>
                                <div class="row">
                                    <p>{{ $portfolio->employer_five_end }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row pt-2">
                            Duties
                        </div>
                        <div class="row pt-2">
                            <p>{{ $portfolio->employer_five_duties }}</p>
                        </div>
                    </div>
                </div>

                <hr>

                <h3>Education</h3>

                <hr>

                <div class="container">
                    <div class="row pb-3">
                        <p>{{ $portfolio->school_name }}</p>
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
                                <p>{{ $portfolio->school_start }}</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                To
                            </div>
                            <div class="row">
                                <p>{{ $portfolio->school_end }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        Degree Earned
                    </div>
                    <div class="row input-group pb-3 pt-2">
                        <p>{{ $portfolio->degree }}</p>
                    </div>
                </div>
                <div class="row pt-3">
                    <a href="{{ 'portfolio' }}" class="btn btn-primary" style="width: 450px">Edit Portfolio</a>
                </div>
            </form>
        </div>
    </div>
@endsection