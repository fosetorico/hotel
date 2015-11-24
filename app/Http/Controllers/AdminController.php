<?php

namespace App\Http\Controllers;

use App\Cartegory;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     *
     * Make sure the user is logged in
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

//    public function index()
//    {
//        return view('staffs.admin');
//    }
//
//    public function removeStaff()
//    {
//        return view('staffs.staff-remove');
//    }
//
//    public function register()
//    {
//        return view('auth.register');
//    }

    public function index(Request $request)
    {
        $inputs = $request->all();

        if(isset($inputs['mobile']))
        {
            $user = User::where('mobile', $inputs['mobile'])->get();
        }
        return view('admin.edit_staff', compact('user'));
    }

    public function search(Request $request)
    {
        $inputs = $request->all();

        if(isset($inputs['mobile']))
        {
            $user = User::where('mobile', $inputs['mobile'])->get();
        }
        return view('admin.staff_details', compact('user'));
    }

    public function billing(){
        if(Auth::user()->admin === 1){
            $bill = Cartegory::all();
            return view('admin.billing',compact('bill'));
        }else{
            return redirect('/staff');
        }
    }
}
