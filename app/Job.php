<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'id',
        'company_name',
        'job_title',
        'salary',
        'description',
        'contact_email'
    ];
}
