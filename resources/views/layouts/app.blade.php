<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Proyecto</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        /* Estilo general para el navbar */
                /* Estilo general para el navbar */
        .navbar {
            background-color: #2c3e50; /* Un color más oscuro para el fondo del navbar */
            padding: 10px 20px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        /* Estilo para el logo del navbar */
        .navbar-brand {
            font-size: 1.9rem;
            font-weight: 700;
            color: #ecf0f1;
            transition: color 0.3s;
        }

        /* Efecto de hover para el logo */
        .navbar-brand:hover {
            color: #1abc9c; /* Color verde suave en hover */
        }

        /* Estilo para los enlaces del menú */
        .navbar-nav .nav-item .nav-link {
            font-size: 1.1rem;
            font-weight: 600;
            color: #bdc3c7; /* Color suave para los enlaces */
            padding: 12px 25px;
            margin: 0 10px;
            transition: background-color 0.3s, color 0.3s;
            border-radius: 4px;
        }

        /* Efecto de hover en los enlaces del menú */
        .navbar-nav .nav-item .nav-link:hover {
            background-color: #1abc9c; /* Fondo verde suave al pasar el mouse */
            color: white;
        }

        /* Estilo para los botones, como el de 'Guardar Reserva' */
        button {
            background-color: #1abc9c; /* Color verde similar al de los enlaces */
            color: white;
            font-size: 1rem;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        /* Efecto de hover para los botones */
        button:hover {
            background-color: #16a085; /* Color ligeramente más oscuro */
        }

        /* Estilo para los inputs y campos de formulario */
        input[type="text"], input[type="email"], input[type="number"], input[type="date"], input[type="time"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #bdc3c7;
            border-radius: 4px;
            font-size: 1rem;
            color: #34495e;
        }

        /* Estilo para los labels */
        label {
            font-size: 1.1rem;
            color: #34495e;
        }

        /* Estilo del pie de página */
        footer {
            background-color: #2c3e50;
            color: #ecf0f1;
            text-align: center;
            padding: 15px;
            font-size: 0.9rem;
            position: relative;
            bottom: 0;
            width: 100%;
        }

        /* Estilos responsivos */
        @media (max-width: 768px) {
            .navbar-nav {
                flex-direction: column;
            }
            .navbar-nav .nav-item .nav-link {
                padding: 10px 20px;
            }
        }



    </style>
</head>
<body>
    <header>
        <!-- Barra de navegación -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{ route('welcome') }}">Mi Proyecto</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('welcome') }}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('tasks.index') }}">Lista de Tareas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('tip-calculator.index') }}">Calculadora de Propinas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('password-generator.index') }}">Generador de Contraseñas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('expense-manager.index') }}">Gestor de Gastos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('reservations.index') }}">Sistema de Reservas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('reservations.create') }}">Crear Reserva</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('notes.index') }}">Gestor de Notas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('events-calendar.index') }}">Calendario de Eventos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('recipes.index') }}">Plataforma de Recetas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('memory-game.index') }}">Juego de Memoria</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('surveys.index') }}">Encuestas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('stopwatch.index') }}">Cronómetro</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')  <!-- Aquí se insertarán los contenidos de cada vista -->
    </main>

    <footer>
        <!-- Pie de página común -->
        <p>&copy; {{ date('Y') }} Mi Proyecto. Todos los derechos reservados.</p>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
