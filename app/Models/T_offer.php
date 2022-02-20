<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class T_offer extends Model
{
    use HasFactory;

    protected $table = 't_offers';
    protected $fillable = [
        'tutor_id',
        'p_post_id',
    ];

    public function p_post(){
        return $this->belongsTo(P_post::class, 'p_post_id', 'id');
    }
}
