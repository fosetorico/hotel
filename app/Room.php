<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'room_img';
    protected $fillable = ['image','name','cart_id'];

    public $image_path = '/uploads/rooms/';

    public function fullPath(){
        return ($this->image) ? $this->image_path . $this->image : null;
    }
}
