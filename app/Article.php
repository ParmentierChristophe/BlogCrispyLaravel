<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Categorie;

class Article extends Model
{
 protected $fillable = [
     'title', 'content', 'categorie_id','user_id'
 ];
    public function categorie() {
    return $this->belongsTo('App\Categorie');
   }

   public function user() {
   return $this->belongsTo('App\User');
  }



}
