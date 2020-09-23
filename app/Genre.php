<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $fillable = [
        'genre', 
    ];
    
    public function pharmaciens()
    {
        return $this->hasMany(Pharmacien::class);
    }
}
