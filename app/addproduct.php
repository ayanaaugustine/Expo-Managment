<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class addproduct extends Model
{
    protected $table = 'tbl_addproduct';
    protected $fillable=['add_id','id','productname','image','productdetails','price'];
}
