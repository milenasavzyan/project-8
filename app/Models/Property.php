<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    public function features()
    {
        return $this->belongsToMany(Feature::class);
    }
    public function images()
    {
        return $this->belongsToMany(Image::class);
    }
    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }
    public function type()
    {
        return $this->belongsTo(Type::class);
    }
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
