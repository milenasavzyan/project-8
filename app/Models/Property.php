<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{

    const STATUS_SALE = 0;
    const STATUS_RENT = 1;


//    const STATUS_SALE = 0;
//    const STATUS_RENT = 1;
//
//    const status = [
//    self::STATUS_SALE => 'For Sale',
//    self::STATUS_RENT => 'For Rent',
//    ];
    protected $fillable = [
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
        'bathrooms'
    ];
    use HasFactory;

    public function setStatusAttribute($value)
    {
        $this->attributes['status'] = ($value == 'For Sale') ? self::STATUS_SALE : self::STATUS_RENT;
    }

    public function getStatusAttribute($value)
    {
        return ($value == self::STATUS_SALE) ? 'For Sale' : 'For Rent';
    }

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
