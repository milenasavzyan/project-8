<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Image;
use App\Models\Property;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function home()
    {
        $properties = Property::all();
        $users = User::all();
        return view('property.index', compact('properties', 'users'));
    }
    public function index()
    {
        $user = User::all();
        $images = Image::all();
        return view('my-profile')->with('users', $user)->with('images', $images);
    }
    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        return view('proeprty.index');
    }
    public function show (Request $request)
    {
        $users = User::all();
        $images = Image::all();
        return view('my-profile', compact('users', 'images'));
    }
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);

        if (!$user) {
            return "User not found";
        }

        $user->fill($request->only(['name', 'email']));
        $user->save();

        return redirect()->route('index');
    }

    public function login(Request $request)
    {
        $properties =Property::all();
        $user = User::all();
        $credentials = $request->only('name', 'password');
        if (Auth::attempt($credentials)) {
            return view('property.index')->with('properties', $properties)->with('users', $user);
        } else {
            echo '<h2>Wrong username or password</h2>';

        }
    }
    public function edit(Request $request, string $id)
    {
        $user = User::findOrFail($id);
        $user->fill($request->only(['name', 'email', 'password']));
        $user->save();

        return view('my-profile', compact('user'));
    }
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }
}
