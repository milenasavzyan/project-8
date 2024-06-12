<?php
namespace App\Http\Controllers;

use App\Services\UserService;
use App\Services\AuthService;
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
    public function store(Request $request, UserService $userService)
    {
        $this->userService = $userService;
        $viewData = $this->userService->store($request);

        return view('property.index', $viewData);
    }
    public function show (Request $request)
    {
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
    public function login(Request $request, AuthService $authService)
    {
        $this->authService = $authService;

        return $this->authService->login($request);
    }
    public function edit(Request $request, string $id)
    {
        $user = User::findOrFail($id);
        $user->fill($request->only(['name', 'email', 'password']));
        $user->save();

        return view('my-profile', compact('user'));
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
