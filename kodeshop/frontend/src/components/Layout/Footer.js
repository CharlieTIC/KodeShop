import React from "react";
import './Footer.css';

const Footer = () => {
    return (
        <>
            {/* Redes sociales */}
            <div id="redes-sociales" className="text-center py-4">
                <h4>¡Síguenos en nuestras redes sociales!</h4>
                <a href="URL_FACEBOOK" target="_blank" rel="noopener noreferrer">
                    <img src="img/icons/facebook.png" alt="Facebook" className="mx-2" />
                </a>
                <a href="URL_TIKTOK" target="_blank" rel="noopener noreferrer">
                    <img src="img/icons/tiktok.png" alt="TikTok" className="mx-2" />
                </a>
                <a href="URL_TELEGRAM" target="_blank" rel="noopener noreferrer">
                    <img src="img/icons/telegram.png" alt="Telegram" className="mx-2" />
                </a>
            </div>

            {/* Pie de página */}
            <footer id="footer" className="footer bg-light text-muted">
                <div className="footerPrincipal py-4">
                    <div className="container text-center">
                        <div className="row">
                            <div className="col-md-4">
                                <h5>Contacto</h5>
                                <a href="contacto.html">Contáctanos</a><br />
                                <a href="#">Centro de ayuda</a><br />
                                <a href="login.html">Cuenta</a>
                            </div>
                            <div className="col-md-4">
                                <h5>Aviso legal</h5>
                                <a href="#">Política de privacidad</a><br />
                                <a href="#">Política de cookies</a><br />
                                <a href="#">Términos de uso</a>
                            </div>
                            <div className="col-md-4">
                                <h5>Secciones</h5>
                                <a href="index.html">Inicio</a><br />
                                <a href="sobreNosotros.html">Sobre Nosotros</a><br />
                                <a href="contacto.html">Contacto</a>
                            </div>
                        </div>
                    </div>
                </div>

                {/* Footer Secundario */}
                <div className="footerSecundario">
                    <div className="container text-center">
                        <h6 className="mb-0">Copyright © KodeShop {new Date().getFullYear()}</h6>
                    </div>
                </div>
            </footer>
        </>
    );
};

export default Footer;