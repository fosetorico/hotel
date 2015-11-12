<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table = 'reservation';
    protected $dates = ['check_in', 'check_out'];
    protected $fillable = ['sname','fname','mobile','email','roomNo_id','check_in','check_out'];


    public function roomNo()
    {
        return $this->belongsTo('App\RoomNo', 'roomNo_id');
    }
//    public function setAtrributeCheckIn($date){
//        $this->check_in
//    }
}
