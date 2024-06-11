<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .navbar {
            margin-bottom: 20px;
        }

        .hero-section {
            background: url('https://via.placeholder.com/1500x500') no-repeat center center;
            background-size: cover;
            color: white;
            height: 500px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .hero-section h1 {
            font-size: 4rem;
        }

        .section {
            padding: 60px 0;
        }

        .footer {
            background: #333;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Mi Sitio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#welcome">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">Sobre Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#features">Características</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contacto</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero-section" id="welcome">
        <div>
            <h1>Bienvenido a Nuestro Sitio</h1>
            <p>Conoce más sobre nosotros y nuestras características</p>
            <a href="#about" class="btn btn-primary btn-lg">Más información</a>
        </div>
    </div>

    <!-- About Section -->
    <div class="section bg-light" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Sobre Nosotros</h2>
                    <p>Somos una empresa dedicada a proporcionar las mejores soluciones tecnológicas. Nuestro equipo
                        está compuesto por expertos en diversas áreas que trabajan juntos para ofrecer productos de alta
                        calidad.</p>
                </div>
                <div class="col-md-6">
                    <img src="https://via.placeholder.com/500x300" alt="Sobre Nosotros" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="section" id="features">
        <div class="container">
            <h2 class="text-center">Características</h2>
            <div class="row">
                <div class="col-md-4 text-center">
                    <i class="fas fa-bolt fa-3x mb-3"></i>
                    <h4>Rápido</h4>
                    <p>Nuestros productos están diseñados para ser rápidos y eficientes.</p>
                </div>
                <div class="col-md-4 text-center">
                    <i class="fas fa-lock fa-3x mb-3"></i>
                    <h4>Seguro</h4>
                    <p>Nos tomamos muy en serio la seguridad de tus datos.</p>
                </div>
                <div class="col-md-4 text-center">
                    <i class="fas fa-cogs fa-3x mb-3"></i>
                    <h4>Personalizable</h4>
                    <p>Nuestros productos son altamente personalizables para satisfacer tus necesidades.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Section -->
    <div class="section bg-light" id="contact">
        <div class="container">
            <h2 class="text-center">Contacto</h2>
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <form>
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" class="form-control" id="name" placeholder="Tu Nombre">
                        </div>
                        <div class="form-group">
                            <label for="email">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email"
                                placeholder="Tu Correo Electrónico">
                        </div>
                        <div class="form-group">
                            <label for="message">Mensaje</label>
                            <textarea class="form-control" id="message" rows="5" placeholder="Tu Mensaje"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>&copy; 2024 Mi Sitio. Todos los derechos reservados.</p>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>

</html>
