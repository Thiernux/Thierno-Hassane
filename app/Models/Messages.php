<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
   protected $fillable = ['name', 'email', 'msg'];

     public function send()
   {
       return $this->hasOne('App\Messages','name', 'email', 'msg');
   }
}
