<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resort extends Model
{
    use HasFactory;

    public static function index() {
        return Resort::all();
    }

    public static function count() {
        return Resort::all()->count();
    }
}
