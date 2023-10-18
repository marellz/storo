<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function user ()
    {
        return $this->belongsTo(User::class);
    }

    public function image ()
    {
        
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
