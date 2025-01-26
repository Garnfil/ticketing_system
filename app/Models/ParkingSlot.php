<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ParkingSlot extends Model
{
    protected $table = "parking_slots";
    protected $fillable = ["warehouse_id", "status", "slot_number", "vehicle_id", 'x_position', 'y_position'];
}
