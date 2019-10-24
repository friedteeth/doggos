<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormAdopcionController extends Controller {
    
    public function index() {
        return view('form_adopcion');
    }
}
