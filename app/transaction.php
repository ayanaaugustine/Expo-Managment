<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    protected $table = 'tbl_payment';
    protected $fillable=['pid','lid','count','expotitle'];
}
