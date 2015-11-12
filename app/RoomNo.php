<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomNo extends Model
{
    protected $table = 'room_no';
    protected $fillable = ['room_no','cart_id','status'];
}
