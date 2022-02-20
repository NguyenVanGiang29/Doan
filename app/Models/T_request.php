<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class T_request extends Model
{
    use HasFactory;

    protected $table = 't_requests';
    protected $fillable = [
        'tutor_id',
        't_post_id',
    ];

    public function t_post(){
        return $this->belongsTo(T_post::class, 't_post_id', 'id');
    }
}