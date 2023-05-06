<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function logout()
    {
        Auth::logout();
        return redirect('/auth');
    }

  public function destroy(Request $request){
    $request->session()->forget('key');
  }
}