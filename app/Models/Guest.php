<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $fillable = [
        "firstName",
        "middleName",
        "lastName",
        "nick"
    ];

    protected function name(): Attribute
    {
        return Attribute::make(
            get: function(mixed $value, array $attributes) {
                $name = [];
                $name[] = $attributes['firstName'];
                if($attributes['middleName'] !== null){
                    $name[] = $attributes['middleName'];
                }
                $name[] = $attributes['lastName'];
                if($attributes['nick'] !== null) {
                    $name[] = '( ' . $attributes['nick'] . ' )';
                }
                return join(" ", $name);
            }
        );
    }

    public function parent(){
        return $this->belongsTo(Guest::class);
    }

    public function table(){
        return $this->belongsTo(Guest::class);
    }

    public function restrictions(){
        return $this->belongsToMany(GuestRestriction::class);
    }

    public function tags(){
        return $this->belongsToMany(GuestTag::class);
    }
}
