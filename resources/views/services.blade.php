<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios - FutureX</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<style>
    /* Estilos generales */
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #000;
        color: #fff;
        line-height: 1.6;
    }

    .container {
        width: 90%;
        max-width: 1200px;
        margin: 0 auto;
    }

    /* Header */
    header {
        background: linear-gradient(to right, #0e44a8, hsl(32, 59%, 51%));
        color: white;
        padding: 20px 0;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    header img {
        width: 120px;
        margin-left: 20px;
    }

    header h1 {
        margin: 0;
        font-size: 6em;
        flex-grow: 1;
        text-align: center;
    }

    /* Navbar */
    nav {
        background-color: #222;
        padding: 10px 0;
    }

    nav ul {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        justify-content: center;
    }

    nav ul li {
        margin: 0 15px;
    }

    nav ul li a {
        color: white;
        text-decoration: none;
        font-weight: bold;
        padding: 10px 15px;
        border-radius: 5px;
        transition: background 0.3s ease;
    }

    nav ul li a:hover {
        background-color: #ff7b00;
    }

    /* Servicios */
    .services-highlight {
        padding: 50px 0;
        text-align: center;
    }

    .services-highlight h2 {
        font-size: 2.2em;
        color: #ff7b00;
        text-transform: uppercase;
        margin-bottom: 30px;
    }

    .services-container {
        display: flex;
        justify-content: center;
        gap: 20px;
        flex-wrap: wrap;
    }

    .service {
        width: 30%;
        background: #111;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(255, 123, 0, 0.5);
        text-align: center;
        transition: transform 0.3s ease;
        cursor: pointer;
        margin-bottom: 20px;
    }

    .service:hover {
        transform: translateY(-5px);
    }

    .service img {
        width: 100%;
        height: auto;
        border-radius: 8px;
        margin-bottom: 15px;
    }

    .service h3 {
        font-size: 1.5em;
        color: #007bff;
    }

    .service p {
        font-size: 1em;
    }

    /* Footer */
    footer {
        background-color: #0e44a8;
        color: white;
        text-align: center;
        padding: 20px 0;
        margin-top: auto;
        width: 100%;
    }

    footer p {
        margin: 0;
    }

    /* Media Queries para Responsividad */
    @media (max-width: 768px) {
        header h1 {
            font-size: 3em;
        }

        .services-container {
            flex-direction: column;
            align-items: center;
        }

        .service {
            width: 80%;
        }

        nav ul {
            flex-direction: column;
        }

        nav ul li {
            margin: 10px 0;
        }
    }

    @media (max-width: 480px) {
        header h1 {
            font-size: 3em;
        }

        .service {
            width: 100%;
        }

        .services-highlight h2 {
            font-size: 1.8em;
        }

        nav ul {
            padding-left: 0;
        }
    }
</style>
<body>
    <header>
        <img src="{{ asset('img/fxlogofinal.png') }}" alt="FutureX Logo">
        <h1>FutureX</h1>
    </header>

    <nav>
        <div class="container">
            <ul>
                <li><a href="/">Inicio</a></li>
                <li><a href="/about">Sobre mí</a></li>
                <li><a href="/contact">Contacto</a></li>
            </ul>
        </div>
    </nav>

    <section class="services-highlight">
        <div class="container">
            <h2>Nuestros Servicios</h2>
            <div class="services-container">
                <a href="/servicios/desarrollo-web" class="service">
                    <img src="{{ asset('img/web.png') }}" alt="Desarrollo Web">
                    <h3>Desarrollo Web</h3>
                    <p>Creamos páginas web modernas y funcionales.</p>
                </a>
                <a href="/servicios/redes-sociales" class="service">
                    <img src="{{ asset('img/redes.png') }}" alt="Redes Sociales">
                    <h3>Redes Sociales</h3>
                    <p>Gestionamos y potenciamos tu presencia en redes.</p>
                </a>
                <a href="/servicios/edicion-video" class="service">
                    <img src="{{ asset('img/video.png') }}" alt="Edición de Video">
                    <h3>Edición de Video</h3>
                    <p>Contenido audiovisual profesional para tu marca.</p>
                </a>
                <a href="/servicios/edicion-video" class="service">
                    <img src="{{ asset('img/bots.png') }}" alt="Chatbots">
                    <h3>Chatbots</h3>
                    <p>Automatiza tus interacciones con clientes.</p>
                </a>
                <a href="/servicios/edicion-video" class="service">
                    <img src="{{ asset('img/pc.png') }}" alt="Mantenimiento de PCs">
                    <h3>Mantenimiento De PCs</h3>
                    <p>Reparación y mantenimiento de equipos informáticos.</p>
                </a>
                <a href="/servicios/edicion-video" class="service">
                    <img src="{{ asset('img/publi.png') }}" alt="Campañas Publicitarias">
                    <h3>Campañas Publicitarias Digitales</h3>
                    <p>Diseñamos campañas publicitarias para tu empresa.</p>
                </a>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2025 FutureX. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>
