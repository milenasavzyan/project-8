<?php

namespace App\Services;

use App\Models\Property;
use Illuminate\Http\Request;
class PropertySearchService
{
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

        return $query->with('images')->paginate(2);
    }
}
