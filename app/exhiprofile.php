<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class exhiprofile extends Model
{
    protected $table = 'tbl_exhibitor';
    protected $fillable=['id','name','mobno','country','state','district','address','image','experience'];
}
