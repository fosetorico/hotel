<?php

namespace App\Http\Controllers;

use App\Reservation;
use App\Room;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class StaffController extends Controller
{
    /**
     *
     * Make sure the user is logged in
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $staf = User::all();
        return view('staffs.staff',compact('staf'));
    }

    public function search(Request $request)
    {
        $inputs = $request->all();
        //$status = Reservation::where('status',4)->get();

        if(isset($inputs['mobile']))
        {
            $customer = Reservation::where('mobile', $inputs['mobile'])->orderBy('check_in', 'desc')->get();
        }
        elseif(isset($inputs['email']))
        {
            $customer = Reservation::where('email', $inputs['email'])->orderBy('check_in', 'desc')->get();
        }
        return view('staffs.staff', compact('customer'));
    }
}
