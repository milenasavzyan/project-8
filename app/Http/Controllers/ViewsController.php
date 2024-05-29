<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Type;
use App\Models\User;
use App\Models\Property;
class ViewsController extends Controller
{
    public function index()
    {
        $users =User::all();
        $properties = Property::all();
        $types = Type::all();
        return view('listings-list', compact('users','properties', 'types'));
    }
    public function show(string $id)
    {

        $properties = Property::find($id);
        $types = Type::find($id);
        return view('listings-list', compact('properties', 'types'));
    }
    public function search(Request $request)
    {
        $propertyStatus = $request->input('status');
        $propertyType = $request->input('type');
        $propertyAddress = $request->input('address');

        $filteredProperties = Property::where('status', $propertyStatus)->where('type_id', $propertyType)->where('address', $propertyAddress);

        return view('listings-list')->with('properties', $filteredProperties);
    }


}
