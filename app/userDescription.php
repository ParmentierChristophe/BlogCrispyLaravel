<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userDescription extends Model
{

 protected $fillable = [
     'description', 'website','avatar'
 ];

 public function user() {
 return $this->belongsTo('App\User');
}
}
