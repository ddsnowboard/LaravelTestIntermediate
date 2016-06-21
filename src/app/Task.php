<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ["name"];

    protected $casts = [
        'user_id' => 'int',
    ];

    function user()
    {
        $this->belongsTo(User::class);
    }
}
