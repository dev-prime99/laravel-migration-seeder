<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fumetti extends Model
{

  protected $table = 'fumetto';

  protected $fillable = [
    'title',
    'author',
    'year',
    'review',
    'vote'
  ];
}
