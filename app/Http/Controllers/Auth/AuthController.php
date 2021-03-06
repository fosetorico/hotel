<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Support\Facades\Hash;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

//    protected $redirectTo = '/staff';
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);

        $this->middleware('auth', ['except' => ['getLogin', 'postLogin']]);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'photo' => 'required|mimes:jpeg,png',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
            'surname' => 'required|alpha|max:255',
            'lastname' => 'required|alpha|max:255',
            'mobile' => 'required|numeric|unique:users',
            'address' => 'required|max:255',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
//            'photo' => $data['photo'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'surname' => $data['surname'],
            'lastname' => $data['lastname'],
            'mobile' => $data['mobile'],
            'address' => $data['address'],
        ]);
    }
}
