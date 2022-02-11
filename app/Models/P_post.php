<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class P_post extends Model
{
    use HasFactory;

    protected $table = 'p_posts';
    protected $fillable = [
        'post_id',
        'parent_id',
        'subject',
        'class',
        'location',
        'method',
        'price',
        'time',
        'session',
        'desc',
    ];

    public function parent(){
        return $this->belongsTo(Parentt::class, 'parent_id', 'id');
    }

    public function post(){
        return $this->belongsTo(Post::class, 'post_id', 'id');
    } 
}
