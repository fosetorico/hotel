<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cartegory extends Model
{
    protected $table = 'cartegory';
    protected $fillable = ['name', 'description', 'image_id','price'];

    public function image()
    {
        return $this->belongsTo('App\Room', 'image_id');
    }

    public function roomNos()
    {
        return $this->hasMany('App\RoomNo', 'cart_id');
    }
}