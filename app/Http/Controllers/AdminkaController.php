<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\User;
class AdminkaController extends Controller
{
    public function index()
    {
        $properties = Property::paginate(10);
        $users = User::all();
        return view('admin.index')->with('properties', $properties)->with('users', $users);
    }
}
