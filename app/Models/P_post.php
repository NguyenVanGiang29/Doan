<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class P_post extends Model
{
    use HasFactory;

    protected $table = 'p_posts';
    protected $fillable = [
        'subject',
        'topic',
        'class',
        'time',
        'method',
        'price',
        'phone',
        'location',
        'desc',
        'number_lesson',
        'time_teaching',
        'parent_id',
        'session',
    ];

    public function parent(){
        return $this->belongsTo(Parentt::class, 'parent_id', 'id');
    }

    public function t_offer(){
        return $this->hasMany(T_offer::class, 'p_post_id', 'id');
    }

    public function t_save(){
        return $this->hasMany(T_save::class, 'p_post_id', 'id');
    }

    public function p_request(){
        return $this->hasMany(P_request::class, 'p_post_id', 'id');
    }

}
