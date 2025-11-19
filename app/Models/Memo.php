<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Memo extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'subtitle',
        'content',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
