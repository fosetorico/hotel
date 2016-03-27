<?php

namespace App\Http\Controllers;

use App\Reservation;
use App\Room;
use App\RoomNo;
use App\User;
use App\Cartegory;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class StaffController extends Controller
{

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

    protected function validator(array $data)
    {
        $messages = [
            'sname.required' => 'The Surname is Required!',
            'sname.alpha' => 'The Surname may only contain letters!',
            'fname.required' => 'The First Name is Required!',
            'fname.alpha' => 'The First Name may only contain letters!',
            'mobile.required' => 'Mobile Number is Required!',
            'mobile.numeric' => 'Mobile Number must be numbers!',
            'email.required' => 'An Email Address is Required!',
            'email.email' => 'A valid Email Address is Required!',
            'roomNo_id.required' => 'Room is Required!',
            'check_in.required' => 'Check In Date is Required!',
            'check_out.required' => 'Check Out Date is Required!',
        ];
        return Validator::make($data, [
            'sname' => 'required|alpha',
            'fname' => 'required|alpha',
            'mobile' => 'required|numeric',
            'email' => 'required|email',
            'roomNo_id' => 'required',
            'check_in' => 'required',
            'check_out' => 'required',
        ], $messages);
    }

    protected function validator2(array $data)
    {
        $messages = [
            'rno.required' => 'The Room No is Required!',
            'phone.required' => 'The Mobile No is Required!',
            'phone.numeric' => 'The Mobile Number may only contain Numbers!',

        ];
        return Validator::make($data, [
            'rno' => 'required',
            'phone' => 'required|numeric',
        ], $messages);
    }

    protected function validator3(array $data)
    {
        $messages = [
            'mobile.required' => 'The Mobile Number is Required!',
            'mobile.numeric' => 'The Mobile Number must be Numbers!',
        ];
        return Validator::make($data, [
            'mobile' => 'required|numeric',
        ], $messages);
    }
    protected function validator4(array $data)
    {
        $messages = [
            'email.required' => 'Email Address is Required!',
            'email.email' => 'A valid Email Address is Required!',
        ];
        return Validator::make($data, [
            'email' => 'required|email',
        ], $messages);
    }
    protected function validator5(array $data)
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

    public function checking()
    {
        $cart = Cartegory::all();
        return view('staffs.checking',compact('cart'));
    }
    public function cOut()
    {
//        $staf = User::all();
        return view('staffs.c_out');//,compact('staf'));
    }

    public function search(Request $request)
    {
        $inputs = $request->all();

        if(isset($inputs['mobile']))
        {
            $customer = Reservation::where('status', '=', 1)->where('mobile', $inputs['mobile'])->orderBy('check_in', 'desc')->get();
            //$customer = Reservation::where('mobile', $inputs['mobile'])->orderBy('check_in', 'desc')->get();
        }
        elseif(isset($inputs['email']))
        {
            $customer = Reservation::where('status', '=', 1)->where('mobile', $inputs['email'])->orderBy('check_in', 'desc')->get();
            //$customer = Reservation::where('email', $inputs['email'])->orderBy('check_in', 'desc')->get();
        }
        return view('staffs.staff', compact('customer'));
    }

    public function availability()
    {
        $reserve = Reservation::where('status',1)->get();
        $checkIn = Reservation::where('status',2)->get();
        $roomNo = RoomNo::where('status',0)->get();
        $cart = Cartegory::all();

        return view('staffs.availability',compact('reserve','checkIn','roomNo','cart'));
    }
    public function reserve()
    {
        $reserve = Reservation::where('status',1)->get();
        $checkIn = Reservation::where('status',2)->get();
        $roomNo = RoomNo::where('status',0)->get();
        $cart = Cartegory::all();

        return view('staffs.reserve',compact('reserve','checkIn','roomNo','cart'));
    }
    public function checkIn()
    {
        $reserve = Reservation::where('status',1)->get();
        $checkIn = Reservation::where('status',2)->get();
        $roomNo = RoomNo::where('status',0)->get();
        $cart = Cartegory::all();

        return view('staffs.check_in',compact('reserve','checkIn','roomNo','cart'));
    }

    public function getReserve($id){
        $reserve = Reservation::where('id', $id)->first();
        $reserve->In = $reserve->check_in->format('Y-m-d');
        $reserve->Out = $reserve->check_out->format('Y-m-d');;

        return response()->json($reserve);
    }

    public function updateCheckIn($reserve_id, $check_in){
        $reserve = Reservation::where('id', $reserve_id)->first();
        $reserve->check_in = $check_in;
        $reserve->status = 2;
        $reserve->save();
        $reserve->room = $reserve->roomNo()->first()->room_no;

        return response()->json($reserve);
    }

    public function updateCheckOut($reserve_id, $check_in){
        $reserve = Reservation::where('id', $reserve_id)->first();
        $reserve->check_in = $check_in;
        $reserve->status = 3;
        if($reserve->save()){
            $room = $reserve->roomNo()->first();
            $room->status = 0;
            $room->save();
        }
        $reserve->room = $reserve->roomNo()->first()->room_no;

        return response()->json($reserve);
    }

    public function getRooms($id){
        $rooms = RoomNo::where('cart_id', $id)->get();

        return response()->json($rooms);
    }

    public function checkIn_room(Request $request){
        $inputs = $request->all();

        $in = new Carbon($inputs['check_in']);
        $out = new Carbon($inputs['check_out']);
        $difference = $in->diffInHours($out, false);

        if ($this->validator($inputs)->fails()) {
            $this->setFlashMessage('Error!!! You have error(s) while filling the form.', 2);
            return redirect('/checking')->withErrors($this->validator($inputs))->withInput();
        }

        if($difference < 0){
            $this->setFlashMessage('Error!!! Check Out Date cannot be less than Check In Date.', 2);
            return redirect('/checking')->withErrors($this->validator($inputs))->withInput();

        }else {
            $reservation = Reservation::create($inputs);
            if ($reservation) {
                $roomNo = $reservation->roomNo()->first();
                $roomNo->status = 1;
                $reservation->status = 2;
                $roomNo->save();
                $reservation->save();
                $this->setFlashMessage('Reserved!!! You have successfully reserved the room.', 1);
                return redirect('/checking');
            }
        }
    }

    public function checkOut_room(Request $request){
        $inputs = $request->all();

        if ($this->validator2($inputs)->fails()) {
            $this->setFlashMessage('Error!!! You have error(s) while filling the form.', 2);
            return redirect('/c_out')->withErrors($this->validator2($inputs))->withInput();
        }

        if(isset($inputs['phone']) && isset($inputs['rno']) ) {
            $room = RoomNo::where('status', '=', 1)->where('room_no', $inputs['rno'])->first();
            $in = Reservation::where('status', '=', 2)->where('mobile', $inputs['phone'])->first();
            if($room and $in){
                $room->status = 0;
                $in->status = 3;
                $in->save();
                $room->save();
                $this->setFlashMessage('Checked Out!!! You have successfully checked the Customer out.', 1);
            }
            else{
                $this->setFlashMessage('Error!!! Please check your inputs.', 2);
            }
                return redirect('/c_out');
        }

    }

    public function detail()
    {
        return view('staffs.edit_detail');
    }

    public function edit_detail(Request $request)
    {
        $inputs = $request->all();

        if(isset($inputs['mobile'])) {
            if ($this->validator3($inputs)->fails()) {
                $this->setFlashMessage('Error!!! You have error(s) while filling the form.', 2);
                return redirect('/edit_detail')->withErrors($this->validator3($inputs))->withInput();
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
            return redirect('/edit_detail');
        }

        elseif(isset($inputs['email'])) {
            if ($this->validator4($inputs)->fails()) {
                $this->setFlashMessage('Error!!! You have error(s) while filling the form.', 2);
                return redirect('/edit_detail')->withErrors($this->validator4($inputs))->withInput();
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
            return redirect('/edit_detail');
        }

        elseif(isset($inputs['password'])) {
            if ($this->validator5($inputs)->fails()) {
                $this->setFlashMessage('Error!!! You have error(s) while filling the form.', 2);
                return redirect('/edit_detail')->withErrors($this->validator5($inputs))->withInput();
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
            return redirect('/edit_detail');
        }
    }

    public function addStaff(Request $request)
    {
        $rules =  [
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
            'surname' => 'required|alpha|max:255',
            'lastname' => 'required|alpha|max:255',
            'mobile' => 'required|numeric|unique:users',
            'address' => 'required|max:255',
        ];
        $inputs = $request->all();
        $validator = Validator::make($inputs,$rules);

        if ($validator->fails()) {
            $this->setFlashMessage('Error!!! You have error(s) while filling the form.', 2);
            return redirect('/register')->withErrors($validator)->withInput();
//            $this->throwValidationException(
//                $request, $validator
//            );
        }

        $inputs['password'] = \Hash::make($inputs['password']);
        $user = User::create($inputs);
        if($request->hasFile('photo'))
        {
            $imageName = $user->id . '.' . $request->file('photo')->getClientOriginalExtension();
            $request->file('photo')->move(base_path() . '/public' . $user->image_path, $imageName);
            //Update Image url
            $user->photo = $imageName;
            $user->save();
        }
        $this->setFlashMessage('Saved!!! The Staff has been registered successfully.', 1);

//        Auth::login($user);

        return redirect('/register');

    }
}
