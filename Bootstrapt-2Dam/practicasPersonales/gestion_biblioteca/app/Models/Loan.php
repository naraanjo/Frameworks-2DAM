<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    protected $table = "loabs";

    public function book(){
      return $this->belongsTo(Books::class);
    }
}
