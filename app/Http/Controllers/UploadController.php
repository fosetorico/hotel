<?php

namespace App\Http\Controllers;

use App\Cartegory;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UploadController extends Controller
{
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
        $cart = Cartegory::all();
        return view('staffs.upload', compact('cart'));
    }
}
