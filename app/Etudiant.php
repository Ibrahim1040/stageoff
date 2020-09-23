<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
   protected $hidden = [
      'password', 'remember_token',
  ];
}
