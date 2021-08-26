<?php

namespace Kimbuktu\Administration\App\Http\Controllers;

use Illuminate\Http\Request;

class AdministrationController extends Controller
{
    public function __construct(){
        //$this->middleware(['auth', 'can:administration.access']);
    }

    public function index(){
        return view('administration.index');
    }

    public function users(){
        return view('administration.users');
    }

    public function roles(){
        return view('administration.roles');
    }

    public function permissions(){
        return view('administration.permissions');
    }

    public function settings(){
        return view('administration.settings');
    }
}
