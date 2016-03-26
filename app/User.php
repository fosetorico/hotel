<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    protected $table = 'users';
    protected $fillable = ['photo','email','password','surname','lastname','mobile','address'];

    protected $hidden = ['admin', 'password', 'remember_token'];

    public function fullName(){
        return $this->surname . ' ' . $this->lastname;
    }

    public $image_path = '/uploads/staff/';

    public function fullPath(){
        return ($this->photo) ? $this->image_path . $this->photo : null;
    }
}
