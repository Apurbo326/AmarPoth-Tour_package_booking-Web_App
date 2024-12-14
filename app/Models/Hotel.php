<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    // Set the table name if it's not the default 'hotels'
    protected $table = 'hotel';

    // Allow mass assignment for these fields
    protected $fillable = [
        'name',
        'country',
        'branch',
        'address',
        'mobile',
        'email',
    ];

    public $timestamps = false;
}
