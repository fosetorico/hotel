<?php

namespace App\Http\Controllers;

use App\Cartegory;
use App\Images;
use App\Room;
use App\RoomNo;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

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

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $messages = [
            'image.required' => 'The Room Image is Required!',
            'image.mimes' => 'The Image Type must be either jpeg or png!',
            'name.required' => 'The Image Name is Required!',
            'cart_id.required' => 'The Room Category is Required!',
        ];
        return Validator::make($data, [
            'image' => 'required|mimes:jpeg,png',
            'name' => 'required',
            'cart_id' => 'required',
        ], $messages);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator2(array $data)
    {
        $messages = [
            'img.required' => 'The Room Image is Required!',
            'img.mimes' => 'The Image Type must be either jpeg or png!',
            'name.required' => 'The Image Name is Required!',
            'description.required' => 'The Image Description is Required!',
        ];
        return Validator::make($data, [
            'img' => 'required|mimes:jpeg,png',
            'name' => 'required',
            'description' => 'required',
        ], $messages);
    }

    public function index()
    {
        $cart = Cartegory::all();
        return view('staffs.uploads', compact('cart'));
    }
    public function galIndex()
    {
        $cart = Cartegory::all();
        return view('staffs.upload_gallery', compact('cart'));
    }

    public function upload(Request $request)
    {
        $inputs = $request->all();
        $validator = $this->validator($inputs);

        if ($validator->fails())
        {
            $this->setFlashMessage('Error!!! You have error(s) while filling the form.', 2);
            return redirect('/upload')->withErrors($validator)->withInput();
        }

        $room = Room::create($inputs);
        if($request->hasFile('image'))
        {
            $imageName = $room->id . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(base_path() . '/public' . $room->image_path, $imageName);
            //Update Image url
            $room->image = $imageName;
            $room->save();
            if($room->save()){
                $this->setFlashMessage('Saved!!! ' . $room->name . ' have successfully been saved', 1);
                return redirect('/upload');
            }
        }

//        $this->setFlashMessage('Saved!!! ' . $room->name . ' have successfully been saved', 1);
//        return redirect('/upload');
    }

    public function galleryUpload(Request $request)
    {
        $inputs = $request->all();
        $validator2 = $this->validator2($inputs);

        if ($validator2->fails())
        {
            $this->setFlashMessage('Error!!! You have error(s) while filling the form.', 2);
            return redirect('/upload_gallery')->withErrors($validator2)->withInput();
        }

        $images = Images::create($inputs);
        if($request->hasFile('img'))
        {
            $imageName = $images->room_id . '.' . $request->file('img')->getClientOriginalExtension();
            $request->file('img')->move(base_path() . $images->image_path, $imageName);
            //Update Image url
            $images->img = $imageName;
            $images->save();
            if($images->save()){
                $this->setFlashMessage('Saved!!! ' . $images->name . ' have successfully been saved', 1);
                return redirect('/upload');
            }
        }
//        $this->setFlashMessage('Saved!!! ' . $images->name . ' have successfully been saved', 1);
//        return redirect('/upload_gallery');
    }
}
