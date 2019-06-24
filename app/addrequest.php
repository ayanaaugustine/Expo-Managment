<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class addrequest extends Model
{
    protected $table = 'tbl_addrequest';
    protected $fillable=['req_id','id','expotitle','sdate','edate','noofbooth','request'];
}
