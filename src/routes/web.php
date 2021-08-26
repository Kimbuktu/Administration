<?php

use Illuminate\Support\Facades\Route;

Route::get('/' . strtolower(config('route')) , ['\Kimbuktu\Administration\App\Http\Controllers\AdministrationController', 'index']);