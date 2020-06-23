<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';

    public function employee(){

      return $this -> hasMany(Employee::class);

    }
}
