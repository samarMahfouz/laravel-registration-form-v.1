<?php

namespace App\Http\Controllers\Register;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\User;
use App\Role;
class RegistrationController extends Controller
{
    //
    public function profile() {
      return view('content.profile');
    }
    public function register() {
      return view('register.signup');
    }
    public function store(Request $request) {

      $user = new User;
      $user->name = $request->name;
      $user->email = $request->email;
      $user->password = bcrypt($request->password);

      $user->save();
      //$user->roles()->attach(Role::where('name', 'user')->first());
      auth()->login($user);
      return redirect('/profile');
    }

}
