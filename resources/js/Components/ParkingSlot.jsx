import { forwardRef, useRef } from "react";
import Draggable from "react-draggable";

const DraggableSlot = forwardRef(({ slot, onStop }, ref) => {
    const nodeRef = useRef(null);

    return (
        <Draggable
            nodeRef={nodeRef}
            defaultPosition={{
                x: (slot.x_position || 0),
                y: (slot.y_position || 0),
            }}
            onStop={onStop}
        >
            <div
                ref={nodeRef}
                className="absolute w-10 h-10 bg-gradient-to-br from-blue-500 to-indigo-600 text-white flex items-center justify-center cursor-pointer border border-gray-900 shadow-3xl transform "
            >
                <div
                    className="flex items-center justify-center w-full h-full text-lg font-bold"
                >
                    {slot.slot_number}
                </div>
            </div>
        </Draggable>
    );
});

export default DraggableSlot;
