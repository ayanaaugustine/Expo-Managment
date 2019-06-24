<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class boothallocate extends Model
{
    protected $table = 'tbl_boothallocate';
    protected $fillable=['allocate_id','expotitle','companyname','sdate','edate','request'];
}
