<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    // If the table name does not follow Laravel's convention
    protected $table = 'bookings';

    // The attributes that are mass assignable
    protected $fillable = [
        'name',
        'email',
        'checkin',
        'checkout',
        'room',
        'adults',
        'children',
    ];
}
