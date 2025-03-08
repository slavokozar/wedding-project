<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    protected $fillable = [
        "name"
    ];
    public function guests(){
        return $this->hasMany(Guest::class);
    }
}
