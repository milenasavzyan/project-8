<?php
namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Admin;
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
        $user = Auth::user();
        return view('property.index', compact('properties', 'user'));
    }
    public function index()
    {
        $users = User::all();
        $images = Image::all();
        return view('my-profile')->with('users', $users)->with('images', $images);
    }
    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        $users = User::all();
        $properties = Property::all();

        return view('property.index', compact('user', 'users', 'properties'));
    }
    public function show (Request $request)
    {
//        $users = User::all();
        $user = $request->user();
        $images = Image::all();
        return view('my-profile', compact('user', 'images'));
    }
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);

        if (!$user) {
            return "User not found";
        }

        $user->fill($request->only(['name', 'email']));

        if ($request->filled('new_password')) {
            $user->password = Hash::make($request->new_password);
        }

        $user->save();

        return redirect()->route('index');
    }

    public function login(Request $request)
    {
        $properties =Property::all();
        $credentials = $request->validate([
            'name' => 'required|string',
            'password' => 'required|string',
        ]);
        if (Auth::attempt([
            'name' => $request->input('name'),
            'password' => $request->input('password')
        ])) {
            return view('property.index')->with('properties', $properties)->with('user', true);
        }
        elseif  (Auth::guard('admin')->attempt($credentials)) {([
                'name' => $request->input('name'),
                'password' => $request->input('password')
            ]);
            return view('admin.properties.index')->with('properties', $properties)->with('user', true);
        }

        else {
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
