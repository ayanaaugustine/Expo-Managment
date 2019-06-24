<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class login extends Model
{
    protected $table = 'tbl_user';
    protected $fillable=['id','name','age','housename','mobno','country','state','district'];
}
