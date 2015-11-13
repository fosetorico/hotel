<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table = 'reservation';
    protected $dates = ['check_in', 'check_out'];
    protected $fillable = ['sname','fname','mobile','email','roomNo_id','check_in','check_out','status'];


    /**
     * Format The Started On Before Inserting
     * @param $date
     */
    public function setCheckInAttribute($date)
    {
        $this->attributes['check_in'] = Carbon::createFromFormat('Y-m-d', $date);
    }

    public function setCheckOutAttribute($date)
    {
        $this->attributes['check_out'] = Carbon::createFromFormat('Y-m-d', $date);
    }

    public function roomNo()
    {
        return $this->belongsTo('App\RoomNo', 'roomNo_id');
    }
//    public function setAtrributeCheckIn($date){
//        $this->check_in
//    }
}
