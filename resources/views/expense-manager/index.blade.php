@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Gestor de Gastos</h1>

        <!-- Formulario para agregar un nuevo gasto -->
        <form method="POST" action="{{ route('expense-manager.store') }}">
            @csrf
            <div class="form-group">
                <label for="name">Nombre del Gasto:</label>
                <input type="text" id="name" name="name" class="form-control" required placeholder="Nombre del gasto">
            </div>

            <div class="form-group">
                <label for="amount">Monto:</label>
                <input type="number" id="amount" name="amount" class="form-control" required step="0.01" placeholder="Monto">
            </div>

            <div class="form-group">
                <label for="category">Categoría:</label>
                <input type="text" id="category" name="category" class="form-control" required placeholder="Categoría">
            </div>

            <button type="submit" class="btn btn-primary">Agregar Gasto</button>
        </form>

        <h2 class="mt-5">Lista de Gastos</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Monto</th>
                    <th>Categoría</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($expenses as $expense)
                    <tr>
                        <td>{{ $expense->name }}</td>
                        <td>${{ number_format($expense->amount, 2) }}</td>
                        <td>{{ $expense->category }}</td>
                        <td>
                            <form action="{{ route('expense-manager.destroy', $expense->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
