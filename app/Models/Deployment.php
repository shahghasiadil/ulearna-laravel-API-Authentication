<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deployment extends Model
{
    use HasFactory;

    public  function envirnoments()
    {
        return $this->belongsTo(Environment::class);
    }
}
