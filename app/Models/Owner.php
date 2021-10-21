<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;

    public function car(){
        return $this->belongsTo(Car::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
