<?php

namespace App\Http\Controllers;

use App\Reservation;
use App\RoomNo;
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
            'fname.required' => 'The First Name is Required!',
            'mobile.required' => 'Mobile Number is Required!',
            'email.required' => 'An Email Address is Required!',
            'email.email' => 'A valid Email Address is Required!',
            'roomNo_id.required' => 'Room is Required!',
            'check_in.required' => 'Check In Date is Required!',
            'check_out.required' => 'Check Out Date is Required!',
        ];
        return Validator::make($data, [
            'sname' => 'required',
            'fname' => 'required',
            'mobile' => 'required',
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
        $cat->image = $cat->image()->first()->image;
        $cat->roomNos = $cat->roomNos()->where('status', 0)->get();

        return response()->json($cat);
    }

    public function reserveRoom(Request $request){
        $inputs = $request->all();


        if ($this->validator($inputs)->fails())
        {
            $reservation = new \stdClass();
            $reservation->success = false;
            $reservation->message = 'Error!!! You have error(s) while filling the form.';
            $reservation->errors = $this->validator($inputs)->errors();
        }else{
            $reservation = Reservation::create($inputs);
            if($reservation){
                $roomNo = $reservation->roomNo()->first();
                $roomNo->status = 1;
                $reservation->status = 'hold';
                $roomNo->save();
                $reservation->save();
                $reservation->roomNo = $reservation->roomNo()->first()->room_no;
                $reservation->success = true;
                $reservation->message = 'Reserved!!! You have successfully reserved the room.';

            }
        }
        return response()->json($reservation);

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

        $images = Images::where('disp','Y')->get();
        $slide = Images::where('slid','Y')->get();
        $cart = Cartegory::all();
        return view('layout.default', compact('images','slide', 'cart', 'customer'));
        //return view('layout.default', compact('customer'));
//        return response()->json($customer);
    }
}
