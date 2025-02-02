<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FutureX - Soluciones Digitales</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #000;
            color: #fff;
            line-height: 1.6;
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Asegura que el cuerpo ocupe toda la altura de la pantalla */
        }

        /* Contenedor principal */
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            flex-grow: 1; /* Permite que el contenido crezca para llenar el espacio disponible */
        }

        /* Header */
        header {
            background: linear-gradient(to right, #0e44a8, hsl(32, 59%, 51%));
            color: white;
            padding: 20px 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        header img {
            width: 120px;
            margin-left: 20px;
        }

        header h1 {
            margin: 0;
            font-size: 6em;
            text-align: center;
            flex-grow: 1;
        }

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

        /* Banner */
        .banner {
            display: flex;
            align-items: center; /* Centra el contenido verticalmente */
            justify-content: space-between; /* Separa la imagen del texto */
            background: url('images/banner.jpg') no-repeat center center/cover;
            color: white;
            padding: 50px 20px;
            text-align: left;
            flex-wrap: wrap;
        }

        .banner img {
            width: 40%;
            height: auto;
            border-radius: 8px;
            margin-left: 20px;
            animation: rotateImage 5s linear infinite;
        }

        @keyframes rotateImage {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }

        .banner .container {
            width: 50%;
            text-align: center;
        }

        .banner h2 {
            font-size: 2.5em;
            margin: 0;
        }

        .banner p {
            font-size: 1.2em;
        }

        /* Nueva descripción y botón CTA */
        .welcome-description {
            font-size: 1.2em;
            margin-top: 20px;
            color: #ddd;
        }

        .cta-button {
            display: inline-block;
            background-color: #FFA500;
            color: #fff;
            padding: 15px 30px;
            margin-top: 20px;
            font-size: 1.2em;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .cta-button:hover {
            background-color: #e07b00;
        }

        /* Servicios Destacados */
        .services-highlight {
            padding: 50px 0;
            background-color: #222;
            text-align: center;
        }

        .services-highlight h2 {
            font-size: 2em;
            margin-bottom: 20px;
            color: #FFA500;
        }

        .service {
            display: inline-block;
            width: 30%;
            margin: 0 1.5%;
            padding: 20px;
            background-color: #333;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(255, 165, 0, 0.5);
            transition: transform 0.3s ease;
        }

        .service h3 {
            font-size: 1.5em;
            margin: 0 0 10px;
            color: #FFA500;
        }

        .service p {
            font-size: 1em;
            margin: 0;
        }

        .service:hover {
            transform: translateY(-5px);
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

        /* MEDIA QUERIES PARA ADAPTAR EL DISEÑO EN DISPOSITIVOS MÓVILES */
        @media (max-width: 480px) {
            header h1 {
                font-size: 3em;
            }

            .banner h2 {
                font-size: 2em;
            }

            .banner p {
                font-size: 1em;
            }

            .service h3 {
                font-size: 1.2em;
            }

            .service p {
                font-size: 0.9em;
            }
        }
        @media (max-width: 768px) {
            header h1 {
                font-size: 2em;
            }

            header h1 {
                font-size: 3em;
            }

            .banner {
                flex-direction: column;
                text-align: center;
            }

            .banner img {
                width: 70%;
                margin: 20px 0;
            }

            .banner .container {
                width: 100%;
            }

            .service {
                width: 100%;
                margin: 20px 0;
            }

            nav ul {
                flex-direction: column;
            }

            nav ul li {
                margin: 10px 0;
            }
        }

        /* Para pantallas grandes */
        @media (min-width: 1024px) {
            .service {
                width: 22%;
            }
        }
    </style>
</head>
<body>
    <header>
        <img src="{{ asset('img/fxlogofinal.png') }}" alt="FutureX Logo">
        <h1>FutureX</h1>
    </header>

    <nav>
        <div class="container">
            <ul>
                <li><a href="/about">Sobre mí</a></li>
                <li><a href="/services">Servicios</a></li>
                <li><a href="/contact">Contacto</a></li>
            </ul>
        </div>
    </nav>

    <section class="banner">
        <div class="container">
            <h2>Bienvenido a FutureX</h2>
            <p>Tu socio en tecnología y crecimiento digital.</p>
            <!-- Descripción de los servicios -->
            <p class="welcome-description">
                En FutureX, ofrecemos soluciones digitales personalizadas para ayudar a tu empresa a crecer y sobresalir en el mundo digital. Desde desarrollo web hasta estrategias de marketing digital, estamos aquí para impulsarte al futuro.
            </p>
            <!-- Botón de llamada a la acción -->
            <a href="/services" class="cta-button">Descubre nuestros servicios</a>
        </div>
        <img src="{{ asset('img/nave2.png') }}" alt="Imagen de FutureX">
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2025 FutureX. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>
