import axios from "axios";

const API_URL = "http://127.0.0.1:8000";

export const getParkingSlots = async () => {
    const response = await axios.get(`${API_URL}/parking-slots`);
    return response.data;
};

export const updateParkingSlotPosition = async (id, x, y) => {
    await axios.put(`${API_URL}/parking-slots/${id}/update-position`, {
        x_position: x,
        y_position: y,
    });
};