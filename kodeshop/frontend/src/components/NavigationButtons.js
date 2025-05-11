import React from "react";
import { useNavigate } from "react-router-dom";

const NavigationButtons = ({ showHome = true, showCreate = true }) => {
    const navigate = useNavigate();

    return (
        <div className="d-flex gap-2 my-3">
            <button className="btn btn-secondary" onClick={() => navigate(-1)}>
                Volver Atrás
            </button>
            {showHome && (
                <button className="btn btn-outline-primary" onClick={() => navigate("/")}>
                    Ir al Inicio
                </button>
            )}
            {showCreate && (
                <button className="btn btn-success" onClick={() => navigate("/create")}>
                    Añadir Producto
                </button>
            )}
        </div>
    );
};

export default NavigationButtons;