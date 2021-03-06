<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $table = 'reviews';
    protected $fillable = [
        'tutor_id',
        'parent_id',
        'rate',
        'content',
    ];

    public function tutor(){
        return $this->belongsTo(Tutor::class, 'tutor_id', 'id');
    }
    
}
