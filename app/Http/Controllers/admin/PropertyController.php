<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Type;
use App\Models\User;

class PropertyController extends Controller
{
    public function index()
    {
        $properties = Property::paginate(5);
        return view('admin.properties.index', compact('properties'));
    }


    public function show(string $id)
    {
        $types = Type::find($id);
        $property = Property::find($id);
        $users = User::all();

        return view('admin.properties.view', compact('property', 'types', 'users'));
    }

    public function edit(Request $request, string $id)
    {

        $properties =Property::all();
        $property = Property::findOrFail($id);
        $property->fill($request->only(['title', 'status', 'price', 'area', 'rooms', 'address', 'city', 'state', 'zip_code', 'description', 'building_age', 'bedrooms', 'bathrooms']));
        $property->save();

        return view('admin.properties.edit', compact('property','properties'));
    }

    public function update(Request $request, string $id)
    {
        $property = Property::findOrFail($id);

        $property->fill($request->only(['title', 'status', 'price', 'area', 'rooms', 'address', 'city', 'state', 'zip_code', 'description', 'building_age', 'bedrooms', 'bathrooms']));
        $property->save();

        return redirect()->route('admin.properties.index', compact('property'));
    }
    public function destroy(string $id)
    {
        $properties = Property::find($id);
        $properties->delete();
        return redirect()->route('admin.properties.index');
    }
}
