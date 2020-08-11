<?php
namespace App\Http\Controllers\Register;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class sessionController extends Controller
{
    //
    public function login() {
      return view('register.login');
    }
    public function store(Request $request) {
      if( ! auth()->attempt(request(['email', 'password']))){
        return back()->withErrors([
          'massage' => 'Email or password not correct',
        ]);
      }
      return redirect('/profile');
    }
    public function destroy() {
      auth()->logout();
      return redirect('/');
    }

}
