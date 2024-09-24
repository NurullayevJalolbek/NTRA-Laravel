<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//dd("ishladi");

class Ad extends Model
{
    protected  $fillable=[
        'title',
        'description',
        'address',
        'price',
        'rooms',
        'branch_id',
        'user_id',
        'status_id',
    ];
    use HasFactory;
    public  function branch(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {

        dd($this->belongsTo(Branch::class));

    }
}
