<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tareas</title>
    <style>
        /* Estilos generales para la página */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7fa;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Contenedor principal */
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        h1 {
            text-align: center;
            color: #4CAF50;
            font-size: 24px;
        }

        /* Estilo del formulario de entrada */
        form {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
            justify-content: center;
        }

        input[type="text"] {
            padding: 10px;
            font-size: 16px;
            width: 70%;
            border: 2px solid #ddd;
            border-radius: 5px;
            outline: none;
        }

        input[type="text"]:focus {
            border-color: #4CAF50;
        }

        button {
            padding: 10px 15px;
            font-size: 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        /* Estilo de la lista de tareas */
        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            border-bottom: 1px solid #ddd;
            font-size: 18px;
        }

        li:last-child {
            border-bottom: none;
        }

        /* Estilo de los botones dentro de la lista */
        .action-buttons {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .action-buttons button {
            padding: 5px 10px;
            font-size: 16px;
            background-color: #ff6347;
            border: none;
            border-radius: 5px;
            color: white;
            cursor: pointer;
        }

        .action-buttons button:hover {
            background-color: #e55347;
        }

        /* Estilo para el botón de marcar tarea completada */
        .check-button {
            background-color: #f0ad4e;
            padding: 8px 12px;
            border-radius: 50%;
            font-size: 20px;
            border: none;
            cursor: pointer;
        }

        .check-button:hover {
            background-color: #ec971f;
        }

        .check-button:focus {
            outline: none;
        }

        /* Tareas completadas */
        .completed {
            text-decoration: line-through;
            color: #bbb;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Lista de Tareas</h1>

        <!-- Formulario para agregar tareas -->
        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf
            <input type="text" name="title" placeholder="Nueva tarea" required>
            <button type="submit">Agregar</button>
        </form>

        <!-- Lista de tareas -->
        <ul>
            @foreach($tasks as $task)
                <li class="{{ $task->is_completed ? 'completed' : '' }}">
                    <div class="action-buttons">
                        <!-- Botón de marcar tarea como completada -->
                        <form action="{{ route('tasks.update', $task->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="check-button">
                                {{ $task->is_completed ? '❌' : '✔️'}}
                            </button>
                        </form>

                        <!-- Título de la tarea -->
                        <span>{{ $task->title }}</span>

                        <!-- Botón de eliminar tarea -->
                        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>

