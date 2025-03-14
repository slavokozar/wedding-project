<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InvitationAccess extends Model
{
    protected $fillable = [
        'ip_address',
        'agent'
    ];

    public function invitation()
    {
        return $this->belongsTo(Invitation::class);
    }
}
