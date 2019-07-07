<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable = [
        'id',
        'skills',
        'employer_one_name',
        'employer_one_start',
        'employer_one_end',
        'employer_one_duties',
        'employer_two_name',
        'employer_two_start',
        'employer_two_end',
        'employer_two_duties',
        'employer_three_name',
        'employer_three_start',
        'employer_three_end',
        'employer_three_duties',
        'employer_four_name',
        'employer_four_start',
        'employer_four_end',
        'employer_four_duties',
        'employer_five_name',
        'employer_five_start',
        'employer_five_end',
        'employer_five_duties',
        'school_name',
        'school_start',
        'school_end',
        'degree',
    ];
}
