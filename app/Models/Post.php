<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['created_at', 'updated_at','activity_starts','activity_ends'];
    protected $casts = [
        'published_at' => 'datetime',
        'activity_starts' => 'datetime',
        'activity_ends' => 'datetime'
    ];

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function tags(){
        return $this->belongsToMany('App\Models\Tag');
    }
}
