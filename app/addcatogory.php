<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class addcatogory extends Model
{
    protected $table = 'tbl_addcatogory';
    protected $fillable=['id','catogoryname'];
}
