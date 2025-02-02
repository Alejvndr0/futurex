<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre mí - FutureX</title>
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
    }

    .service:hover {
        transform: translateY(-5px);
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
    width: 100%;
    position: absolute;
    bottom: 0;
}


        footer p {
            margin: 0;
        }
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
<body>
    <header>
        <img src="{{ asset('img/fxlogofinal.png') }}" alt="FutureX Logo">

        <h1>FutureX</h1>
    </header>

    <nav>
        <div class="container">
            <ul>
                <li><a href="/">Inicio</a></li>
                <li><a href="/services">Servicios</a></li>
                <li><a href="/contact">Contacto</a></li>
            </ul>
        </div>
    </nav>

    <section class="container">
        <h2>Sobre mí</h2>
        <p>Hola, soy Alejandro, fundador de FutureX, me especializo en ofrecer soluciones digitales personalizadas para emprendedores y empresas.</p>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2025 FutureX. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>