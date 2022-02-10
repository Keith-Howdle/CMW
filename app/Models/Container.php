<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Container extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'ID',
        'PREFIX',
        'TANK NUMBER',
        'CHECK DIGIT',
        'MANUFACTURER',
        'YEAR OF MANUFACTURE',
        'MANUFACTURERS SERIAL NUMBER',
        'FRAME DIMENSIONS M',
        'TARE WEIGHT',
        'TEMP RATING Degrees C',
        'WORKING Pressure',
        'TEST Pressure',
        'UN Tank Type',
        'ACTUAL Capacity Ltrs',
        'DISCHARGE Type',
        'NO OF Bottom Closures',
        'TYPE OF Heating',
        'STEAM Heating Area sqm',
        'DEDICATED PRODUCT NAME',
        'YEAR of Refurb Required',
        'REFURB Category',
        'REFURB Completed',
        'DATE Refurb Completed',
        'JAPANESE FDA Approved',
        'INTERNALLY Lined',
    ];

}
// list all containers
// Container::all();

// find container by id number
// container::find(1);

// count table rows
// container::count();
