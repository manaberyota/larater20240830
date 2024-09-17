<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    // 🔽 設定できるカラムを追加
    protected $fillable = ['comment', 'tweet_id', 'user_id'];

    // 🔽 多対1の関係
    public function tweet()
    {
    return $this->belongsTo(Tweet::class);
    }

    // 🔽 多対1の関係
    public function user()
    {
    return $this->belongsTo(User::class);
    }
    public function comments()
    {
    return $this->hasMany(Comment::class)->orderBy('created_at', 'desc');
    }
}
