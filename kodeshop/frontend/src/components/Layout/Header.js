import React from "react";
import { Link } from "react-router-dom";

const Header = () => {
    return (
        <header className="bg-dark text-white p-3 mb-4">
            <div className="container text-center">
                <h1 className="h4 mb-3">Tienda Online KodeShop</h1>
                <nav className="d-flex flex-wrap justify-content-center gap-2">
                    <Link to="/" className="btn btn-outline-light">Inicio</Link>
                    <Link to="/" className="btn btn-outline-light">PC-Sobremesa</Link>
                    <Link to="/" className="btn btn-outline-light">PC-Portátil</Link>
                    <Link to="/" className="btn btn-outline-light">Periféricos</Link>
                    <Link to="/" className="btn btn-outline-light">Consumibles</Link>
                    <Link to="/" className="btn btn-outline-light">Contacto</Link>
                </nav>
            </div>
        </header>
    );
};

export default Header;