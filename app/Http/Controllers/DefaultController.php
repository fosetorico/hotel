<?php

namespace App\Http\Controllers;

use App\Reservation;
use App\RoomNo;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Cartegory;
use App\Room;
use App\Images;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class DefaultController extends Controller
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

    public function index()
    {
        $images = Images::where('disp','Y')->get();
        $slide = Images::where('slid','Y')->get();
        $cart = Cartegory::all();
        return view('layout.default', compact('images','slide', 'cart'));
    }

    public function getCategory($id){
        $cat = Cartegory::where('id', $id)->first();
        $cat->image = $cat->image()->first()->fullPath();
        $cat->roomNos = $cat->roomNos()->where('status', 0)->get();

        return response()->json($cat);
    }

    public function reserveRoom(Request $request){
        $inputs = $request->all();

        $in = new Carbon($inputs['check_in']);
        $out = new Carbon($inputs['check_out']);
        $difference = $in->diffInHours($out, false);

//        $check = Reservation::where('roomNo_id', $inputs['roomNo_id'])->where('check_in', $inputs['check_in'])->count();
        $checks = Reservation::where('roomNo_id', $inputs['roomNo_id'])->get();
        $count = 0;
        foreach($checks as $check){
            if($check->check_in->format('Y-m-d') === $inputs['check_in'])
                $count++;
        }

        if($count > 0){
            $reservation = new \stdClass();
            $reservation->success = false;
            $reservation->message = 'This Room Has Already Been Reserved On The Desired Check In Date.';
            $reservation->errors = ['This Room Has Already Been Reserved On The Desired Check In Date'];

            return response()->json($reservation);
        }

        if($difference < 0){
            $reservation = new \stdClass();
            $reservation->success = false;
            $reservation->message = 'Error!!! Check Out Date cannot be less than Check In Date.';
            $reservation->errors = ['Check Out Date cannot be less than Check In Date'];

            return response()->json($reservation);
        }
        else {

            if ($this->validator($inputs)->fails()) {
                $reservation = new \stdClass();
                $reservation->success = false;
                $reservation->message = 'Error!!! You have error(s) while filling the form.';
                $reservation->errors = $this->validator($inputs)->errors();
            } else {
                $reservation = Reservation::create($inputs);
                if ($reservation) {
                    $roomNo = $reservation->roomNo()->first();
//                    $roomNo->status = 1;
                    $reservation->status = 1;
//                    $roomNo->save();
                    $reservation->save();
                    $reservation->roomNo = $reservation->roomNo()->first()->room_no;
                    $reservation->In = $reservation->check_in->format('Y-m-d');
                    $reservation->Out = $reservation->check_out->format('Y-m-d');;
                    $reservation->success = true;
                    $reservation->message = 'Reserved!!! You have successfully reserved the room.';

                }
            }
            return response()->json($reservation);
        }

    }

    public function search(Request $request)
    {
        $inputs = $request->all();
        $customers = new \stdClass();

        if(isset($inputs['mobile_search']))
        {
            $customer = Reservation::where('status', '=', 1)->where('mobile', $inputs['mobile_search'])->orderBy('check_in', 'desc')->get();
        }
        elseif(isset($inputs['email_search']))
        {
            $customer = Reservation::where('status', '=', 1)->where('email', $inputs['email_search'])->orderBy('check_in', 'desc')->get();
        }

        if($customer->count() > 0){
            foreach($customer as $cus){
                $cus->room = $cus->roomNo()->first()->room_no;
                $cus->in = $cus->check_in->format('D, jS, M Y');
                $cus->out = $cus->check_out->format('D, jS, M Y');
            }

            $customers->reserve = $customer;
            $customers->success = true;
        }
        return response()->json($customers);
    }
}
