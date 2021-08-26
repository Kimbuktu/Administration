<?php

use Illuminate\Support\Facades\Route;

Route::get('/' . lowercase(config('route')) , ['\Kimbuktu\Administration\App\Http\Controllers\AdministrationController', 'index']);