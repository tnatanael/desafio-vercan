<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProvidersController extends Controller
{
    /**
     * Exibe o datatables com os fornecedores
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('providers');
    }
}
