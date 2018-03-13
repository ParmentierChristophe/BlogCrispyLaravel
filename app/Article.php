<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    public function article() {
    $this->belongsTo(Article::class);
   }

}
