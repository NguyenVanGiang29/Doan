<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parentt extends Model
{
    use HasFactory;

    protected $table = 'parents';
    protected $fillable = [
        'job',
        'address',
        'phone',
        'avatar',
        'user_id',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function p_post(){
        return $this->hasMany(P_post::class, 'tutor_id', 'id');
    }

    public function review(){
        return $this->hasMany(Review::class, 'tutor_id', 'id');
    }
}
