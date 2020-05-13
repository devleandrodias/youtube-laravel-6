<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function homepage()
    {
        $variavel = "Homepage para sistema de gestão de grupos de investimentos";

        return view('welcome', [
            'title' => $variavel
        ]);
    }

    public function cadastrar()
    {
        print "Tela de Cadastro...";
    }

    public function logar()
    {
        print "Tela de Login...";
    }
}
