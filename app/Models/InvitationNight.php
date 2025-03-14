<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InvitationNight extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'night'
    ];
}
