<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function insert(Request $request)
    {
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        echo '11';

    }
    public function login(Request $request)
    {
        $credentials = $request->only('name', 'password');
        if (Auth::attempt($credentials)) {
            return view('index');
        } else {
//            echo '<h2>Wrong username or password</h2>';

            return view('index');
        }
    }
//        if (Auth::attempt($credentials)) {
////            return redirect()->route('index');
//            return view('index');
//        }
//
//        echo '<h2>Wrong username or password</h2>';
////        return view('index');
//    }
}
