<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    protected $table = 'images';

    protected $primaryKey = 'room_id';

    protected $fillable = ['img','name','description','slid','disp'];

    public $image_path = '/public/uploads/gallery/';

    public function fullPath(){
        return ($this->image) ? $this->image_path . $this->img : null;
    }
}
