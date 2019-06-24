<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class addexpo extends Model
{
    protected $table = 'tbl_addexpo';
    protected $fillable=['id','expotitle','expotype','noofbooth','catogoryname','subcatogoryname','state','city','sdate','edate','plan','image'];
}
