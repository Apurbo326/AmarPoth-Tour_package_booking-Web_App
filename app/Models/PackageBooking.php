<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageBooking extends Model
{
    use HasFactory;

    protected $table = 'package_booking';

    protected $fillable = [
        'package_id',
        'user_id',
        'payment_amount',
        'journey_date',
        'bkash_account_number',
        'transaction_id',
        'payment_date',
        'created_by',
        'created_date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function package()
    {
        return $this->belongsTo(Package::class, 'package_id');
    }

    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id', 'id');
    }
}
