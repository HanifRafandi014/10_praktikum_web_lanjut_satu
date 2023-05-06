<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientTester extends Model
{
    use HasFactory;

    public static function index() {
        return ClientTester::all();
    }

    public static function count() {
        return ClientTester::all()->count();
    }
}
