import { useRef } from "react";
import DraggableSlot from "../Components/ParkingSlot.jsx";
import { updateParkingSlotPosition } from "../utils/api.js";
import WarehouseLayout from "../Components/WarehouseLayout.jsx";

const ParkingGrid = ({ parkingSlots, warehouse }) => {
    const handleStop = async (e, data, id) => {
        await updateParkingSlotPosition(id, data.x, data.y);
    };

    if (!warehouse.layout) {
        return <WarehouseLayout />
    }


    return (
        <div className="flex p-3 justify-between items-start gap-3 w-full h-screen">
            <div className="relative w-auto h-auto bg-gray-100 parking-grid">

                {/* Draggable Slots */}
                <div>
                    {parkingSlots.map((slot) => (
                        <DraggableSlot key={slot.id} slot={slot} onStop={(e, data) => handleStop(e, data, slot.id)} />
                    ))}
                </div>

            </div>

        </div>

    );
};

export default ParkingGrid;
