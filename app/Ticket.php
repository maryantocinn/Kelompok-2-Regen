<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
        "airline",
        "fromCity",
        "destinationCity",
        "boardingTime",
        "landingTime",
        "class",
        "childPrice",
        "adultPrice"
    ];

    public function cart(){
        return $this->hasMany(Cart::class);
    }
}
