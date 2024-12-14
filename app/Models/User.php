<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Model
{
    protected $table = 'user'; 
    public $timestamps = false; 

    use HasFactory;

    public function bookings()
    {
        return $this->hasMany(PackageBooking::class, 'user_id');
    }
}
