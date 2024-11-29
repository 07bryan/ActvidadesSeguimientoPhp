<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    // Define los campos que se pueden llenar de manera masiva
    protected $fillable = ['title', 'description', 'ingredients', 'instructions'];
}

