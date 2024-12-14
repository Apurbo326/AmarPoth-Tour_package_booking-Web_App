<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    // Specify the correct table name
    protected $table = 'status';

    // Allow mass assignment of specific fields
    protected $fillable = ['name'];

    // Define the relationship with the PackageBooking model
    public function packageBookings()
    {
        return $this->hasMany(PackageBooking::class, 'status_id', 'id');
    }
}
