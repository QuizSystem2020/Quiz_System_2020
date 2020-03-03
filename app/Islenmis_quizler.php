<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Islenmis_quizler extends Model
{
    use SoftDeletes;
    protected $table = 'islenmis_quizlers';
}
