<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'body', 'excerpt'];

    public function user(){
        $this->belongsTo(User::class);
    }
    public function tags(){
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }
}
