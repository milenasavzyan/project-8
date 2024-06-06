<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feature;
use App\Http\Controllers\FeatureController;


class FeaturesController extends Controller
{
    public function index()
    {
        $features = Feature::all();
        return view('admin.features.index', compact('features'));
    }
    public function show(string $id)
    {
        $features = Feature::all();
        $feature = Feature::findOrFail($id);
        return view('admin.features.view', compact('feature', 'features'));
    }

    public function edit(Request $request, string $id)
    {

        $features =Feature::all();
        $feature = Feature::findOrFail($id);
        $feature->fill($request->only(['name']));
        $feature->save();

        return view('admin.features.edit', compact('feature','features'));
    }

    public function update(Request $request, string $id)
    {
        $feature = Feature::findOrFail($id);

        $feature->fill($request->only(['name']));
        $feature->save();

        return redirect()->route('admin.features.index', compact('feature'));
    }
    public function destroy(string $id)
    {
        $features = Feature::find($id);
        $features->delete();
        return redirect()->route('admin.features.index');
    }
}
