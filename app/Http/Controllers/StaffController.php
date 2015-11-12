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

        if($inputs['mobile'])
        {
            $customer = Reservation::where('mobile', $inputs['mobile'])->get();
        }
        elseif($inputs['email'])
        {
            $customer = Reservation::where('email', $inputs['email'])->get();
        }
        return view('staffs.staff', compact('customer'));
    }
}
