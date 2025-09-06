<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ImportDataController;



Route::post('/import-data', [ImportDataController::class,'importData']);

