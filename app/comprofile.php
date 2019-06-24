<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comprofile extends Model
{
    protected $table = 'tbl_company';
    protected $fillable=['id','name','mobno','country','state','district','comaddress','landmark','comexperience'];
}
