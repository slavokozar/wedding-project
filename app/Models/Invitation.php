<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    protected $fillable = [
        "emails"
    ];

    public function mainGuest()
    {
        return $this->belongsTo(Guest::class, 'guest_id');
    }

    public function accesses()
    {
        return $this->hasMany(InvitationAccess::class);
    }

    public function nights()
    {
        return $this->hasMany(InvitationNight::class);
    }
}
