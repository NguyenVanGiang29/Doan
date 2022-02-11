<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function t_post(){
        return $this->hasOne(T_post::class, 'post_id', 'id');
    }

    public function p_post(){
        return $this->hasOne(P_post::class, 'post_id', 'id');
    }

    public function offer(){
        return $this->hasMany(Offer::class, 'post_id', 'id');
    }

    public function save_post(){
        return $this->hasMany(Save::class, 'post_id', 'id');
    }
}
