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

        $customer = Reservation::where('mobile', $inputs['mobile']);
        return view('staffs.staff', compact('customer'));
    }
}
