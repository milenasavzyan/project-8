<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $fillable = ['image'];
    public function properties()
    {
        return $this->belongsToMany(Property::class);
    }
    public function users()
    {
        return $this->hasOne(User::class);
    }
}
