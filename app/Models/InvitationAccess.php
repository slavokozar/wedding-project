<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InvitationAccess extends Model
{
    protected $fillable = [
        'ip_address',
        'browser',
        'device'
    ];
}
