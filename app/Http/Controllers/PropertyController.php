<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use App\Models\User;
use App\Services\PropertySearchService;
use App\Services\PropertyService;
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
    public function store(Request $request, PropertyService $propertyService)
    {
        $this->propertyService = $propertyService;
        $propertyWithImages = $this->propertyService->store($request);

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
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $property = Property::find($id);
        $property->fill($request->only(['title', 'status', 'price', 'area', 'rooms', 'address', 'city', 'state', 'zip_code', 'description', 'building_age', 'bedrooms', 'bathrooms']));
        $property->save();

        return redirect()->route('property.index', compact('property'));
    }

    public function search(Request $request, PropertySearchService $propertySearchService)
    {
        $this->propertySearchService = $propertySearchService;
        $searchResults = $this->propertySearchService->search($request);

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
