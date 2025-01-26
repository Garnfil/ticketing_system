<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WarehouseLayout extends Model
{
    protected $table = "warehouse_layouts";

    protected $fillable = ['warehouse_id', 'rows', 'columns'];
}
