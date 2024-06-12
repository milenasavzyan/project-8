<?php

namespace App\Services;


use App\Models\Property;
use App\Models\Image;
use Illuminate\Http\Request;
class PropertyService
{
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

                $image->image = 'images/properties/' . $filename;
                $image->save();

                $property->images()->attach($image->id);
            }
        }
        $propertyWithImages = Property::with('images')->find($property->id);

        return $propertyWithImages;
    }
}
