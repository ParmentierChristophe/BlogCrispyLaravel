<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
   public function categories() {
   $this->hasMany(Article::class);
  }


}
