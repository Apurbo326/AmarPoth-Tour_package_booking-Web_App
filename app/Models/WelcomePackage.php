<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WelcomePackage extends Model
{
    use HasFactory;

    protected $table = 'package'; // Use the same table as the original Package model

    protected $fillable = [
        'name',
        'description',
        'summary',
        'price',
        'starting_point',
        'ending_point',
        'package_days',
        'package_catagory_id',
    ];

    public function images()
    {
        return $this->hasMany(WelcomePackageImage::class, 'package_id');
    }
}
