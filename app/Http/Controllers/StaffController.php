<?php

namespace App\Http\Controllers;

use App\Reservation;
use App\Room;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class StaffController extends Controller
{
    public function index()
    {
        return view('staffs.staff');
    }

    public function search(Request $request)
    {
        $inputs = $request->all();

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
