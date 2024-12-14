<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $table = "package";
    protected $fillable = [
        'name', 
        'description', 
        'summary', 
        'price', 
        'starting_point', 
        'ending_point', 
        'package_days', 
        'package_catagory_id'
    ];

    public $timestamps = false;


    public function packageImages()
    {
        return $this->hasMany(PackageImage::class);
    }


}
