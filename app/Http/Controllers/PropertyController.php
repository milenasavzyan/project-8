<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use App\Models\Image;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Type;
use Illuminate\Support\Facades\Auth;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $properties = Property::all();
        $users = User::all();
        $types = Type::all();
        return view('property.listings', ['properties' => $properties], ['users' => $users], ['types' => $types]);
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
        $user = Auth::user();
        if ($user) {

            $property = new Property();

            $property->title = $request->title;
            $property->type_id = $request->type;
            $property->user_id = "1";
            $property->status = $request->status;
            $property->price = $request->price;
            $property->area = $request->area;
            $property->rooms = $request->rooms;
            $property->address = $request->address;
            $property->city = $request->city;
            $property->state = $request->state;
            $property->zip_code = $request->zip_code;
            $property->description = $request->description;
            $property->building_age = $request->building_age;
            $property->bedrooms = $request->bedrooms;
            $property->bathrooms = $request->bathrooms;


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
        } else {
            $password = Str::random(8);
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($password),
            ]);

            Mail::to($user->email)->send(new TemporaryUserCreated($user, $password));


        }

        return redirect()->route('property.index')->with('property', $property);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $types = Type::find($id);
        $properties = Property::find($id);

        return view('property.listings', compact('properties', 'types'));
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
        $propertyStatus = $request->input('status');
        $propertyType = $request->input('type');
        $propertyState = $request->input('state');
        $propertyCity = $request->input('city');
        $propertyBedrooms = $request->input('bedrooms');
        $propertyBathrooms = $request->input('bathrooms');
        $filteredProperties = Property::where('status', $propertyStatus)->where('type_id', $propertyType)->where('state', $propertyState)->where('city', $propertyCity)->where('bedrooms', $propertyBedrooms)->where('bathrooms', $propertyBathrooms)->get();

        return view('property.listings')->with('properties', $filteredProperties);
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
