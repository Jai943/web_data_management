<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'user_id',
        'post_id'
    ];

    //belongs  to user
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    //belongs to post
    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }


}
