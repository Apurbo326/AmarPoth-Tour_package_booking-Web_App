<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PackageImage extends Model
{
    protected $table = "package_image";
    protected $fillable = [
        'package_id', 
        'image', 
        'caption'
    ];

    public $timestamps = false; 
}

