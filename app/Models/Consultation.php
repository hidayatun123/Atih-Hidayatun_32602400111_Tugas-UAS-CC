<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'question',
        'image',
        'answer',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}