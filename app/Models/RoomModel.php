<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomModel extends Model
{
    use HasFactory;
    protected $table='room';
    protected $fillable = [
        'room_no', 'room_type', 'price', 'capacity', 'description', 'image'
    ];

}