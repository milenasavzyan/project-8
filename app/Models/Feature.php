<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    public function index()
    {
        $features = Feature::pluck('name', 'id');
        return view('admin.features.index', compact('features'));
    }
    public function properties()
    {
        return $this->belongsToMany(Property::class);
    }
}
