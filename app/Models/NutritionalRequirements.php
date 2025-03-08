<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NutritionalRequirements extends Model
{
    protected $fillable = [
        "name",
        "main"
    ];

    public function guests(){
        return $this->hasMany(Guest::class);
    }
}
