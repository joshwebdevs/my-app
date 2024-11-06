<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Define the fillable properties
    protected $fillable = [
        'title',     // Add title here
        'content',   // Ensure content is also included
        'user_id',   // Include user_id if you're tracking the post owner
    ];
}
