<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Lesson extends Eloquent {
  protected $fillable = ['title', 'body'];

  protected $hidden = ['password'];

}
