<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class T_post extends Model
{
    use HasFactory;

    protected $table = 't_posts';
    protected $fillable = [
        'post_id',
        'tutor_id',
        'subject',
        'class',
        'achievement',
        'method',
        'price',
        'desc',
    ];

    public function tutor(){
        return $this->belongsTo(Tutor::class, 'tutor_id', 'id');
    }

    public function post(){
        return $this->belongsTo(Post::class, 'post_id', 'id');
    }
}
