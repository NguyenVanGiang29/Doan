<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class P_save extends Model
{
    use HasFactory;

    protected $table = 'p_saves';
    protected $fillable = [
        'parent_id',
        't_post_id',
    ];

    public function t_post(){
        return $this->belongsTo(T_post::class, 't_post_id', 'id');
    }
}
