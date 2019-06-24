<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class addsubcatogory extends Model
{
    protected $table = 'tbl_addsubcatogory';
    protected $fillable=['id','catogoryname','subcatogoryname'];
}
