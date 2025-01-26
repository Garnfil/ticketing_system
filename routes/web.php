<?php

use App\Http\Controllers\ParkingSlotController;
use App\Models\Warehouse;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    $warehouses = Warehouse::all();
    return Inertia::render('Home', compact('warehouses'));
});

Route::get('/parking-slots/{id}', [ParkingSlotController::class, 'index']);
Route::put('/parking-slots/{id}/update-position', [ParkingSlotController::class, 'updatePosition']);
