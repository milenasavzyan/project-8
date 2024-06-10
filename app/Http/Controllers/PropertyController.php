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
        return view('property.submit-property', compact('features', 'users'), ['types' => $types] );
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
            $property->features()->attach($request->input('features'));
        }

        if ($request->hasFile('images')) {

            foreach ($request->file('images') as $file) {
                $image = new Image();
                $filename = uniqid() . '.' . $file->getClientOriginalExtension();

                $file->move(public_path('images/properties'), $filename);

                $image->image = 'public/images/properties/' . $filename;
                $image->save();

                $property->images()->attach($image->id);

            }
        }
        $propertyWithImages = Property::with('images')->find($property->id);

        return redirect()->route('property.index')->with('property', $propertyWithImages)->with('success', 'Property created successfully!');

    }

    /**
     * Display the specified resource.
     */


    public function show(string $id)
    {
        $user = Auth::user();
        $types = Type::all();
        $property = Property::find($id);
        return view('property.single-property', compact('user',  'types', 'property'));


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
        $status = $request->input('statusName');
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
            $query->join('types', 'properties.type_id', '=', 'types.id')
                ->where('types.name', $type);
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

        $searchResults = $query->with('images')->paginate(2);

        return view('property.listings')->with('searchResults', $searchResults);
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
