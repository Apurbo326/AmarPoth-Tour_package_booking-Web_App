<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WelcomePackageImage extends Model
{
    use HasFactory;

    protected $table = 'package_image'; // Use the same table as the original PackageImage model

    protected $fillable = [
        'package_id',
        'image',
        'caption',
    ];

    public function package()
    {
        return $this->belongsTo(WelcomePackage::class, 'package_id');
    }
}
