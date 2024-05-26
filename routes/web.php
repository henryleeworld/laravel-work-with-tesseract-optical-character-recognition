<?php

use App\Http\Controllers\TesseractController;
use Illuminate\Support\Facades\Route;

Route::get('tesseract/parse/', [TesseractController::class, 'parse']);
