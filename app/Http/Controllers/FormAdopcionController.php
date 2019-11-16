<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Esta clase se encarga de manejar el formulario para dar en adopcion
 */
class FormAdopcionController extends Controller {
    
    public function index() {
        return view('form_adopcion');
    }
}
