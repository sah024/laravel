<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;
    protected $fllable = ['title', 'content', 'category_id', 'user_id'];

    public function user():BelongsTo {
        return $this->belengsTo(User::class);
    }

    public function category():BelongsTo {
        return $this->belongsTo(Category::class);
    }

    public function comments():HasMany {
        return $this->hasMany(Comment::class);
    }
}
