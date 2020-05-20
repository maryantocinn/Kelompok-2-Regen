<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        "user_id",
        "ticket_id",
        "child_count",
        "adult_count"
    ];

    public function user(){
        return $this->belongsto(User::class);
    }

    public function ticket(){
        return $this->belongsto(Ticket::class);
    }
}
