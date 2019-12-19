<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FAQ extends Model
{
    public $fillable = [
    'name',
    'description',
    'image'
  ];
}
