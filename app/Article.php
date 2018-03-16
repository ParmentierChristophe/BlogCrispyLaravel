<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Categorie;

class Article extends Model
{

    public function categorie() {
    return $this->belongsTo('App\Categorie');
   }

   public function user() {
   return $this->belongsTo('App\User');
  }



}
