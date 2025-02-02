<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - FutureX</title>
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

        /* Navegación */
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
            flex-wrap: wrap;
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
            background: url('images/banner.jpg') no-repeat center center/cover;
            color: white;
            padding: 100px 0;
            text-align: center;
        }

        .banner h2 {
            font-size: 2.5em;
            margin: 0;
        }

        .banner p {
            font-size: 1.2em;
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

        /* Formulario de Contacto */
        .contact-form {
            background-color: #222;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(255, 165, 0, 0.5);
            margin-bottom: 30px;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: none;
            background-color: #333;
            color: white;
        }

        .contact-form button {
            background-color: #ff7b00;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1.1em;
            transition: background-color 0.3s ease;
        }

        .contact-form button:hover {
            background-color: #e66e00;
        }

        /* Redes Sociales */
        .social-links {
            display: flex;
            justify-content: center;
            margin: 20px 0;
        }

        .social-links a {
            margin: 0 15px;
            color: white;
            font-size: 1.5em;
            transition: color 0.3s ease;
        }

        .social-links a:hover {
            color: #ff7b00;
        }

        /* Footer */
        footer {
            background-color: #0e44a8;
            color: white;
            text-align: center;
            padding: 20px 0;
            margin-top: auto; /* Esto asegura que el footer se quede abajo */
            width: 100%;
        }

        footer p {
            margin: 0;
        }

        /* Media Queries - Responsividad */
        /* Para dispositivos móviles */
        @media (max-width: 768px) {
            header h1 {
                font-size: 3em;
            }

            .banner h2 {
                font-size: 1.8em;
            }

            .banner p {
                font-size: 1em;
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
                <li><a href="/">Inicio</a></li>
                <li><a href="/about">Sobre mí</a></li>
                <li><a href="/services">Servicios</a></li>
            </ul>
        </div>
    </nav>

    <section class="container">
        <h2>Contacto</h2>
        <p>¿Listo para empezar? Escríbenos a :</p>
        
    

        <!-- Redes Sociales -->
        <div class="social-links">
            <a href="https://www.facebook.com/share/1BSfUmpZdu/" target="_blank" title="Facebook">
                <i class="fab fa-facebook"></i> Facebook
            </a>
            <a href="https://www.instagram.com/futurexsolucionesdigitales_?igsh=MTNmamQ2amVoMHZtaA==" target="_blank" title="Instagram">
                <i class="fab fa-instagram"></i> Instagram
            </a>
            <a href="https://api.whatsapp.com/send/?phone=59175919651&text&type=phone_number&app_absent=0&wame_ctl=1" target="_blank" title="LinkedIn">
                <i class="fab fa-linkedin"></i> WatsApp
            </a>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2025 FutureX. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>
