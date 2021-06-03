<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'reference',
        'room_and_suites_id',
        'mail',
        'arrival_date',
        'departure_date',
        'adult',
        'child',
        'total_customer'
    ];

    public function selectRoom()
    {
        return $this->belongsTo(RoomAndSuite::class, 'room_and_suites_id');
    }
}
