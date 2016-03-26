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

class ContactController extends Controller
{
    public function index()
    {
        return view('layout.contact');
    }

    public function index2()
    {
        $images = Images::all();     //where('disp','Y')->get();
        $slide = Images::all();      //where('slid','Y')->get();
        $cart = Cartegory::all();
        return view('layout.gallery', compact('images','slide', 'cart'));
//        return view('layout.gallery');
    }
}
