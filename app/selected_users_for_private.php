<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class selected_users_for_private extends Model
{
    use SoftDeletes;
    protected $table = 'selected_users_for_private';
}
