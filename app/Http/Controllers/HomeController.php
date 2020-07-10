<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth'); // Verifica se o usuário está logado ou não.
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}

/*
 * Middleware: Dentro da aplicação web, ele é um código
 * que é executado ENTRE a requisição (Request) e a aplicação
 * de fato (é a lógica executada pelo acesso a uma determinada rota).
 *
 * Request -> Middleware [Aplicação (Acesso a qualquer rota)] <- Marketplace
 */
