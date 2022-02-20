<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class P_request extends Model
{
    use HasFactory;

    protected $table = 'p_requests';
    protected $fillable = [
        'parent_id',
        'p_post_id',
    ];

    public function p_post(){
        return $this->belongsTo(P_post::class, 'p_post_id', 'id');
    }
    
}
