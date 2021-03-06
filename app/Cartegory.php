<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cartegory extends Model
{
    protected $table = 'cartegory';
    protected $fillable = ['name', 'description', 'image_id','price','start_price'];

    public function image()
    {
        return $this->belongsTo('App\Room', 'image_id');
    }

    public function roomNos()
    {
        return $this->hasMany('App\RoomNo', 'cart_id');
    }

    public function rooms()
    {
        return $this->hasMany('App\Room', 'cart_id');
    }
}