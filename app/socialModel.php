<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class socialModel extends Model
{
    protected $table = 'github_login';
    protected $primaryKey= 'id';
    protected $keyType = 'int';
    public $incrementing = true;
    public $timestamps = false;

}


