<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class topics_questions extends Model
{
    use SoftDeletes;
    protected $table = 'topics_questions';
}
