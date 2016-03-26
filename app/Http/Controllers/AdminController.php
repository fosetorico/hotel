<?php

namespace App\Http\Controllers;

use App\Cartegory;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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

    protected function validator(array $data)
    {
        $messages = [
            'mobile.required' => 'The Mobile Number is Required!',
            'mobile.numeric' => 'The Mobile Number must be Numbers!',
        ];
        return Validator::make($data, [
            'mobile' => 'required|numeric',
        ], $messages);
    }
    protected function validator2(array $data)
    {
        $messages = [
            'email.required' => 'Email Address is Required!',
            'email.email' => 'A valid Email Address is Required!',
        ];
        return Validator::make($data, [
            'email' => 'required|email',
        ], $messages);
    }
    protected function validator3(array $data)
    {
        $messages = [
            'password.required' => 'Password is Required!',
            'password_confirmation.required' => 'Confirm Password is Required!',
            'password.confirmed' => 'Password Mismatch!',
        ];
        return Validator::make($data, [
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required|min:6'
        ], $messages);
    }

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

//    public function billing(){
//        if(Auth::user()->admin === 1){
//            $bill = Cartegory::all();
//            return view('admin.billing',compact('bill'));
//        }else{
//            return redirect('/staff');
//        }
//    }

    public function block_staff(Request $request)
    {
        $inputs = $request->all();

        if(isset($inputs['mobile']))
        {
            if ($this->validator($inputs)->fails()) {
                $this->setFlashMessage('Error!!! You have error(s) while filling the form.', 2);
                return redirect('/block')->withErrors($this->validator($inputs))->withInput();
            }

            $staf = User::where('status', '=', 0)->where('mobile', $inputs['mobile'])->first();
            if($staf){
                $staf->status = 1;
                $staf->save();
                $this->setFlashMessage('This staff has been denied access successfully.', 1);
            }
            else{
                $this->setFlashMessage('Error!!! Please check your inputs.', 2);
            }
            return redirect('/block');
        }

        elseif(isset($inputs['email'])) {
            if ($this->validator2($inputs)->fails()) {
                $this->setFlashMessage('Error!!! You have error(s) while filling the form.', 2);
                return redirect('/block')->withErrors($this->validator2($inputs))->withInput();
            }

            $staf = User::where('status', '=', 0)->where('email', $inputs['email'])->first();
            if ($staf) {
                $staf->status = 1;
                $staf->save();
                $this->setFlashMessage('This staff has been denied access successfully.', 1);
            } else {
                $this->setFlashMessage('Error!!! Please check your inputs.', 2);
            }
            return redirect('/block');
        }
    }

    public function unblock_staff(Request $request)
    {
        $inputs = $request->all();

        if(isset($inputs['mobile'])) {
            if ($this->validator($inputs)->fails()) {
                $this->setFlashMessage('Error!!! You have error(s) while filling the form.', 2);
                return redirect('/unblock')->withErrors($this->validator($inputs))->withInput();
            }

            $staf = User::where('status', '=', 1)->where('mobile', $inputs['mobile'])->first();
            if($staf){
                $staf->status = 0;
                $staf->save();
                $this->setFlashMessage('This staff has been granted access successfully.', 1);
            }
            else{
                $this->setFlashMessage('Error!!! Please check your inputs.', 2);
            }
            return redirect('/unblock');
        }

        elseif(isset($inputs['email'])) {
            if ($this->validator2($inputs)->fails()) {
                $this->setFlashMessage('Error!!! You have error(s) while filling the form.', 2);
                return redirect('/unblock')->withErrors($this->validator2($inputs))->withInput();
            }

            $staf = User::where('status', '=', 1)->where('email', $inputs['email'])->first();
            if ($staf) {
                $staf->status = 0;
                $staf->save();
                $this->setFlashMessage('This staff has been granted access successfully.', 1);
            } else {
                $this->setFlashMessage('Error!!! Please check your inputs.', 2);
            }
            return redirect('/unblock');
        }
    }

    public function admin_edit(Request $request)
    {
        $inputs = $request->all();

        if(isset($inputs['mobile'])) {
            if ($this->validator($inputs)->fails()) {
                $this->setFlashMessage('Error!!! You have error(s) while filling the form.', 2);
                return redirect('/edit_staff')->withErrors($this->validator($inputs))->withInput();
            }

            $staf = User::where('mobile', $inputs['old_mobile'])->first();
            if($staf){
                $staf->mobile = $inputs['mobile'];
                $staf->save();
                $this->setFlashMessage('Mobile Number Edited successfully.', 1);
            }
            else{
                $this->setFlashMessage('Error!!! Please check your inputs.', 2);
            }
            return redirect('/edit_staff');
        }

        elseif(isset($inputs['email'])) {
            if ($this->validator2($inputs)->fails()) {
                $this->setFlashMessage('Error!!! You have error(s) while filling the form.', 2);
                return redirect('/edit_staff')->withErrors($this->validator2($inputs))->withInput();
            }

            $staf = User::where('mobile', $inputs['old_email'])->first();
            if($staf){
                $staf->email = $inputs['email'];
                $staf->save();
                $this->setFlashMessage('Email Address Edited successfully.', 1);
            }
            else{
                $this->setFlashMessage('Error!!! Please check your inputs.', 2);
            }
            return redirect('/edit_staff');
        }

        elseif(isset($inputs['password'])) {
            if ($this->validator3($inputs)->fails()) {
                $this->setFlashMessage('Error!!! You have error(s) while filling the form.', 2);
                return redirect('/edit_staff')->withErrors($this->validator3($inputs))->withInput();
            }

            $staf = User::where('mobile', $inputs['old_mobile'])->first();
            if($staf){
                $staf->password = Hash::make($inputs['password']);
                $staf->save();
                $this->setFlashMessage('Password Edited successfully.', 1);
            }
            else{
                $this->setFlashMessage('Error!!! Please check your inputs.', 2);
            }
            return redirect('/edit_staff');
        }
    }

//    public function staff_edit(Request $request)
//    {
//        $inputs = $request->all();
//
//        if (isset($inputs['mobile'])) {
//            if ($this->validator($inputs)->fails()) {
//                $this->setFlashMessage('Error!!! You have error(s) while filling the form.', 2);
//                return redirect('/edit_staff')->withErrors($this->validator($inputs))->withInput();
//            }
//
//            $staf = User::where('mobile', $inputs['old_mobile'])->first();
//            if ($staf) {
//                $staf->mobile = $inputs['mobile'];
//                $staf->save();
//                $this->setFlashMessage('Mobile Number Edited successfully.', 1);
//            } else {
//                $this->setFlashMessage('Error!!! Please check your inputs.', 2);
//            }
//            return redirect('/edit_staff');
//        }
//
//        elseif (isset($inputs['email'])) {
//            if ($this->validator2($inputs)->fails()) {
//                $this->setFlashMessage('Error!!! You have error(s) while filling the form.', 2);
//                return redirect('/edit_staff')->withErrors($this->validator2($inputs))->withInput();
//            }
//
//            $staf = User::where('mobile', $inputs['old_email'])->first();
//            if ($staf) {
//                $staf->email = $inputs['email'];
//                $staf->save();
//                $this->setFlashMessage('Email Address Edited successfully.', 1);
//            } else {
//                $this->setFlashMessage('Error!!! Please check your inputs.', 2);
//            }
//            return redirect('/edit_staff');
//        }
//
//        elseif (isset($inputs['password'])) {
//            if ($this->validator3($inputs)->fails()) {
//                $this->setFlashMessage('Error!!! You have error(s) while filling the form.', 2);
//                return redirect('/edit_staff')->withErrors($this->validator3($inputs))->withInput();
//            }
//
//            $staf = User::where('mobile', $inputs['old_mobile'])->first();
//            if ($staf) {
//                $staf->password = Hash::make($inputs['password']);
//                $staf->save();
//                $this->setFlashMessage('Password Edited successfully.', 1);
//            } else {
//                $this->setFlashMessage('Error!!! Please check your inputs.', 2);
//            }
//            return redirect('/edit_staff');
//        }
//    }
}
