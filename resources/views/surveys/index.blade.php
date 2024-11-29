@extends('layouts.app')

@section('content')
    <div class="survey-container">
        <h1 class="title">Encuestas</h1>

        <!-- Formulario para responder a la encuesta -->
        <div class="survey-form">
            <h2>Responde a la encuesta</h2>
            <form action="{{ route('surveys.submit') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="question1">Pregunta 1:</label>
                    <input type="text" id="question1" name="question1" required>
                </div>

                <div class="form-group">
                    <label for="question2">Pregunta 2:</label>
                    <input type="text" id="question2" name="question2" required>
                </div>

                <div class="form-group">
                    <label for="question3">Comentarios (opcional):</label>
                    <textarea id="question3" name="question3"></textarea>
                </div>

                <button type="submit" class="btn-submit">Enviar Encuesta</button>
            </form>
        </div>

        <!-- Encuestas enviadas -->
        <div class="submitted-surveys">
            <h2>Encuestas enviadas</h2>
            @foreach($surveys as $survey)
                <div class="survey-item">
                    <p><strong>Pregunta 1:</strong> {{ $survey->question1 }}</p>
                    <p><strong>Pregunta 2:</strong> {{ $survey->question2 }}</p>
                    <p><strong>Comentarios:</strong> {{ $survey->question3 }}</p>
                </div>
            @endforeach
        </div>
    </div>

    <style>
        /* Estilos generales */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        .survey-container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h1.title {
            text-align: center;
            color: #4CAF50;
            font-size: 28px;
            margin-bottom: 20px;
        }

        h2 {
            color: #333;
            font-size: 22px;
            margin-bottom: 15px;
        }

        /* Estilo del formulario */
        .survey-form {
            margin-bottom: 40px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-size: 16px;
            color: #555;
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            border: 2px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
        }

        input[type="text"]:focus, textarea:focus {
            border-color: #4CAF50;
            outline: none;
        }

        textarea {
            height: 120px;
            resize: vertical;
        }

        /* Estilo para el botón de enviar */
        .btn-submit {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        .btn-submit:hover {
            background-color: #45a049;
        }

        /* Estilo de las encuestas enviadas */
        .submitted-surveys {
            margin-top: 40px;
        }

        .survey-item {
            background-color: #f1f1f1;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .survey-item p {
            margin: 8px 0;
            color: #333;
        }

        .survey-item strong {
            color: #4CAF50;
        }
    </style>
@endsection
