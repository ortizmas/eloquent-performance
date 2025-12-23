<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    // Always eager load the relationship? But use with caution!
    protected $with = ['user'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
