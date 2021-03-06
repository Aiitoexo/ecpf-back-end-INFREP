<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomAndSuite extends Model
{
    use HasFactory;

    public function typeRoom() {
        return $this->belongsTo(TypeRoom::class);
    }
}
