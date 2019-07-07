<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JoinedGroup extends Model
{
    protected $fillable = [
        'user_id',
        'group_id'
    ];
}
