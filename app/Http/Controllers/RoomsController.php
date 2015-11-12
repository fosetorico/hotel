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


//<?php $i = 0?>
<!--@foreach($cart as $car)-->
<!--@if($i < 1)-->
<!--<div class="item active" style="background-color: ghostwhite; height: 400px;">-->
<!--    @else-->
<!--    <div class="item" style="background-color: ghostwhite; height: 400px;">-->
<!--        @endif-->
<!--        <div class="container" style="">-->
<!--            <div class="center gap">-->
<!--                <h2>{{$car->name}}.</h2>-->
<!--            </div>-->
<!--            @if($car->rooms()->count() > 0)-->
<!--            <div class="row" style="margin-top: 4%">-->
<!--                @foreach($car->rooms()->get() as $room)-->
<!--                <div class="col-sm-3">-->
<!--                    <div class="carousel-content" style="">-->
<!--                        <img class="" src="{{$room->image}}" alt="" style="width:96%;height:200px;">-->
<!--                    </div>-->
<!--                </div>-->
<!--                @endforeach-->
<!--            </div>-->
<!--            @endif-->
<!--        </div><br/>-->
<!--        <div class="form-group">-->
<!--            <center><button value="{{$car->id}}" style="width: 30%" type="button" class="reserveRoomBtn btn btn-primary "><b>Reserve</b></button></center>-->
<!--        </div>-->
<!--    </div>-->
<!--    {{$i++}}-->
<!--    @endforeach-->
