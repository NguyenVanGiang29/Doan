<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    use HasFactory;

    protected $table = 'tutors';
    protected $fillable = [
        'sex',
        'birthday',
        'phone',
        'address',
        'job',
        'avatar',
        'user_id',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function t_post(){
        return $this->hasMany(T_post::class, 'tutor_id', 'id');
    }
}
