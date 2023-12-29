<?php

namespace App\Http\Controllers;

use App\Models\Obra;
use App\Models\Requisicao;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function admin(){
        //Ir buscar informação
        // retornar a view e passar essa informação para view
        return view('dashboards.admin',[
            //variaveis para utilizar na view
            'total_req' => Requisicao::total_requisicoes(),
            'total_users' => User::count(),
            'total_obras' => Obra::count(),
            'req_abertas'=> Requisicao::where('aberta',true)->count(),
            'requisicoes'=>Requisicao::requisicoes()->get()->take(5)
        ]);
    }


    public function cliente(){

    }
}
