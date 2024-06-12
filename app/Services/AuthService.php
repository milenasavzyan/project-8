<?php

namespace App\Services;

use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AuthService
{
    public function login(Request $request)
    {
        $properties = Property::all();
        $credentials = $request->validate([
            'name' => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            return view('property.index')->with('properties', $properties)->with('user', true);
        } elseif (Auth::guard('admin')->attempt($credentials)) {
            return view('admin.properties.index')->with('properties', $properties)->with('user', true);
        } else {
            return '<h2>Wrong username or password</h2>';
        }
    }


}
