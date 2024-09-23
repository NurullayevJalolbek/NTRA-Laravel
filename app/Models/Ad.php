<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//dd("ishladi");

class Ad extends Model
{
    use HasFactory;
    public  function branch(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {

        dd($this->belongsTo(Branch::class));

    }
}
