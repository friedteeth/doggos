<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AsociacionController extends Controller {

    public function index() {
        return view('asociacion');
    }

    public function detalle($id) {
        return view('asociacion');
    }
}
