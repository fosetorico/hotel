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

class DefaultController extends Controller
{
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

        $reservation = Reservation::create($inputs);

        if($reservation){
            $roomNo = $reservation->roomNo()->first();
            $roomNo->status = 1;
            $roomNo->save();
            $reservation->roomNo = $reservation->roomNo()->first()->room_no;

            return response()->json($reservation);
        }
    }
}
