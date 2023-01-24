<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use hasFactory;

    protected $casts = [
        'item_id' => 'int',
        'user_id' => 'int',
        'stars' => 'int',
        'status' => 'bool'
    ];

    protected $fillable = [
        'stars',
        'content',
        'item_type',
        'item_id',
        'user_id',
        'status'
    ];

    public function user(){
        return $this->belongsTo(User::class); 
    }
}
