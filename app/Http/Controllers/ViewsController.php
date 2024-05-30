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
        $status = $request->input('status');
        $type = $request->input('type');
        $address = $request->input('address');

        $query = Property::query();

        if ($status) {
            $query->where('status', $status);
        }
        if ($type) {
            $query->where('type_id', $type);
        }
        if ($address) {
            $query->where('address', 'like', '%' . $address . '%');
        }

        $searchResults = $query->get();

        return view('listings-list')->with('properties', $searchResults);
    }
}
