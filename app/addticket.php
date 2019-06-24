<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class addticket extends Model
{
    
    protected $table = 'tbl_addticket';
    protected $fillable=['ticket_id','id','expotitle','tickettype','ticketrate','nooftickets'];
}
