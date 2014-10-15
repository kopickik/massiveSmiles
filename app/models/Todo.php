<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Todo extends Eloquent {

  protected $guarded = array();

  public function getCompletedAttribute($value) {
    return (boolean) $value;
  }

}
