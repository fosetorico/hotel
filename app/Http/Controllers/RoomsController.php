<?php

namespace App\Http\Controllers;

use App\Cartegory;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RoomsController extends Controller
{
    public function index()
    {
        $cart = Cartegory::all();
        return view('layout.rooms', compact('cart'));
    }
}
