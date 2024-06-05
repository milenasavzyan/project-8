<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use App\Models\Image;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Type;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\TemporaryUserCreated;
use Illuminate\Support\Facades\Auth;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $properties = Property::all();
        $user = Auth::user();
        $types = Type::all();
        return view('property.listings', ['properties' => $properties], ['user' => $user], ['types' => $types]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Type::all();
        $users = User::all();
        $features = Feature::all();
        return view('property.submit-property', ['types' => $types], ['users' => $users], ['features' => $features]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $userId = auth()->id();

        $property = new Property();

        $data = $request->only([
            'title',
            'status',
            'price',
            'area',
            'rooms',
            'address',
            'city',
            'state',
            'zip_code',
            'description',
            'building_age',
            'bedrooms',
            'bathrooms',
        ]);
        $property->user_id = $userId;
        $property->type_id = $request->type;

        $property->fill($data);
        $property->save();

        if ($request->has('features')) {
            $property->features()->attach($request->features);
        }

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $path = $file->store('');

                $image = new Image();
                $image->image = $path;
                $image->save();

                $property->images()->attach($image->id);

            }

        }

        return redirect()->route('property.index')->with('property', $property)->with('success', 'Property created successfully!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $types = Type::find($id);
        $properties = Property::find($id);
        $users = User::all();

        return view('property.listings', compact('properties', 'types', 'users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $property = Property::find($id);
        $property->fill($request->only(['title', 'status', 'price', 'area', 'rooms', 'address', 'city', 'state', 'zip_code', 'description', 'building_age', 'bedrooms', 'bathrooms']));
        $property->save();

        return redirect()->route('property.index', compact('property'));
    }
    public function search(Request $request)
    {
        $status = $request->input('status');
        $type = $request->input('type');
        $state = $request->input('state');
        $city = $request->input('city');
        $bedrooms = $request->input('bedrooms');
        $bathrooms = $request->input('bathrooms');

        $query = Property::query();

        if ($status) {
            $query->where('status', $status);
        }
        if ($type) {
            $query->where('type_id', $type);
        }
        if ($state) {
            $query->where('state', $state);
        }
        if ($city) {
            $query->where('city', $city);
        }
        if ($bedrooms && $bedrooms !== 'Beds (Any)') {
            $query->where('bedrooms', $bedrooms);
        }
        if ($bathrooms && $bathrooms !== 'Baths (Any)') {
            $query->where('bathrooms', $bathrooms);
        }

        $searchResults = $query->get();

        return view('property.listings')->with('properties', $searchResults);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $properties = Property::find($id);
        $properties->delete();
        return redirect()->route('property.index');
    }
}
