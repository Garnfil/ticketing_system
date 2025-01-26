<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    protected $table = "warehouses";
    protected $fillable = [
        "name",
        "description",
        "capacity",
        "occupied",
    ];

    public function layout()
    {
        return $this->hasOne(WarehouseLayout::class, 'warehouse_id');
    }
}
