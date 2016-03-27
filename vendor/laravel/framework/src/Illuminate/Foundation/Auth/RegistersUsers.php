<?php

namespace Illuminate\Foundation\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

trait RegistersUsers
{
    use RedirectsUsers;

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function getRegister()
    {
        return view('auth.register');
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function postRegister(Request $request)
    {
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            $this->setFlashMessage('Error!!! You have error(s) while filling the form.', 2);
            return redirect('/register')->withErrors($validator)->withInput();
//            $this->throwValidationException(
//                $request, $validator
//            );
        }

        $inputs = $request->all();

        $user = $this->create($inputs);
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
