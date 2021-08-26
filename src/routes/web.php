<?php

use App\Providers\AdministrationServiceProvider as ASP;
use Illuminate\Support\Facades\Route;

Route::get('/' . strtolower(config(ASP::$key . 'route')) , ['\Kimbuktu\Administration\App\Http\Controllers\AdministrationController', 'index']);