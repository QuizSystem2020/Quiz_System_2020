<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Suallar extends Model
{
    use SoftDeletes;
    protected $table = 'suallars';

}

