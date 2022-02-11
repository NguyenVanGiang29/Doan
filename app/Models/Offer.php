<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    protected $table = 'offers';
    protected $fillable = [
        'post_id',
        'user_id',
    ];

    public function post(){
        return $this->belongsTo(Post::class, 'post_id', 'id');
    }
}
