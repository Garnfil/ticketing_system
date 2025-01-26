<?php

namespace App\Http\Controllers;

use App\Models\ParkingSlot;
use App\Models\Warehouse;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ParkingSlotController extends Controller
{
    public function index(Request $request)
    {
        $warehouse_id = $request->id;
        $warehouse = Warehouse::with('layout')->findOrFail($warehouse_id);

        $parkingSlots = ParkingSlot::where('warehouse_id', ($warehouse_id ?? 1))->get();

        return Inertia::render('ParkingGrid', compact('parkingSlots', 'warehouse'));
    }

    public function updatePosition(Request $request, $id)
    {
        $request->validate([
            'x_position' => 'required|integer',
            'y_position' => 'required|integer',
        ]);

        $slot = ParkingSlot::findOrFail($id);
        $slot->update([
            'x_position' => $request->x_position,
            'y_position' => $request->y_position,
        ]);

        return response()->json(['message' => 'Position updated', 'slot' => $slot]);
    }
}
