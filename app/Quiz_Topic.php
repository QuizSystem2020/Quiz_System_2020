<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Quiz_Topic extends Model
{
    use SoftDeletes;
    protected $table = 'quiztopics';
}
