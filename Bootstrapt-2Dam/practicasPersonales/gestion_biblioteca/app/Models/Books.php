<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    // Books 1-1 author
    public function author(){
      return $this->belongsTo(Author::class);
    }

    // Books 1-n loans
    public function loans(){
      return $this->hasMany(Loan::class);
    }

    // Books n-1 categories
    public function categories(){
      return $this->belongsToMany(Category::class);
    }
}
