<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    public function starterMenu() {
        return $this->hasMany(StarterMenu::class);
    }

    public function mainCourseMenu() {
        return $this->hasMany(MainCourseMenu::class);
    }

    public function dessertMenu() {
        return $this->hasMany(DessertMenu::class);
    }
}
