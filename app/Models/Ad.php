<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Ad extends Model
{
    use HasFactory;
    protected  $fillable=[
        'title',
        'description',
        'address',
        'price',
        'gender',
        'rooms',
        'branch_id',
        'user_id',
        'status_id',
    ];

    protected  $with = ['images'];

    public static function where(string $string, int|string|null $id)
    {
    }

    public  function branch(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {

        return$this->belongsTo(Branch::class);

    }
    public  function images(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(AdImage::class);
    }
    public  function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {

        return$this->belongsTo(User::class);
    }
}
