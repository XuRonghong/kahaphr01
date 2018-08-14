<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SysMember extends Model
{
    public $timestamps = false;
    protected $table = 'sys_member';
    protected $primaryKey = 'iId';

}
