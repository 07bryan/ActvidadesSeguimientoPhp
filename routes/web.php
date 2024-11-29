<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TipCalculatorController;
use App\Http\Controllers\PasswordGeneratorController;
use App\Http\Controllers\ExpenseManagerController;
use App\Http\Controllers\ReservationSystemController;
use App\Http\Controllers\NotesController;
use App\Http\Controllers\EventsCalendarController;
use App\Http\Controllers\RecipesPlatformController;
use App\Http\Controllers\MemoryGameController;
use App\Http\Controllers\SurveysPlatformController;
use App\Http\Controllers\OnlineStopwatchController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
Route::patch('/tasks/{task}', [TaskController::class, 'update'])->name('tasks.update');
Route::delete('/tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');

// Calculadora de propinas
Route::get('/tip-calculator', [TipCalculatorController::class, 'index'])->name('tip-calculator.index');
Route::post('/tip-calculator', [TipCalculatorController::class, 'calculate'])->name('tip-calculator.calculate'); 
// Generador de contraseñas
Route::get('/password-generator', [PasswordGeneratorController::class, 'index'])->name('password-generator.index');
Route::post('/password-generator', [PasswordGeneratorController::class, 'generate'])->name('password-generator.generate');
// Gestor de gastos
Route::get('/expense-manager', [ExpenseManagerController::class, 'index'])->name('expense-manager.index');
Route::post('/expense-manager', [ExpenseManagerController::class, 'store'])->name('expense-manager.store');
Route::delete('/expense-manager/{expense}', [ExpenseManagerController::class, 'destroy'])->name('expense-manager.destroy');
// Sistema de reservas
Route::get('/reservations', [ReservationSystemController::class, 'index'])->name('reservations.index');
Route::get('/reservations/create', [ReservationSystemController::class, 'create'])->name('reservations.create');
Route::post('/reservations', [ReservationSystemController::class, 'store'])->name('reservations.store');
// Gestor de notas
Route::get('/notes', [NotesController::class, 'index'])->name('notes.index');
Route::get('/notes/create', [NotesController::class, 'create'])->name('notes.create');
Route::post('/notes', [NotesController::class, 'store'])->name('notes.store');
// Calendario de eventos
Route::get('/events-calendar', [EventsCalendarController::class, 'index'])->name('events-calendar.index');
Route::get('/events-calendar/create', [EventsCalendarController::class, 'create'])->name('events-calendar.create');
Route::post('/events-calendar', [EventsCalendarController::class, 'store'])->name('events-calendar.store');
// Plataforma de recetas
Route::get('/recipes', [RecipesPlatformController::class, 'index'])->name('recipes.index');
Route::get('/recipes/create', [RecipesPlatformController::class, 'create'])->name('recipes.create');
Route::post('/recipes', [RecipesPlatformController::class, 'store'])->name('recipes.store');
// Juego de memoria
Route::get('/memory-game', [MemoryGameController::class, 'index'])->name('memory-game.index');
// Plataforma de encuestas
Route::get('/surveys', [SurveysPlatformController::class, 'index'])->name('surveys.index');
Route::post('/surveys/submit', [SurveysPlatformController::class, 'submitSurvey'])->name('surveys.submit');
// Cronómetro online
Route::get('/stopwatch', [OnlineStopwatchController::class, 'index'])->name('stopwatch.index');
Route::post('/stopwatch/start', [OnlineStopwatchController::class, 'start'])->name('stopwatch.start');
Route::post('/stopwatch/stop', [OnlineStopwatchController::class, 'stop'])->name('stopwatch.stop');
Route::post('/stopwatch/reset', [OnlineStopwatchController::class, 'reset'])->name('stopwatch.reset');
