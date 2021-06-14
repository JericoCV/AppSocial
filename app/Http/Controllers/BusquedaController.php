<?php


namespace App\Http\Controllers;
use App\Http\Controllers\OfertaController;
use App\Http\Controllers\OfertanteController;
use App\Http\Controllers\SolicitanteController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;

class BusquedaController
{
    public function recognize(Request $request){
        switch ($request->type){
            case 'persona':
                $search = new SolicitanteController();
                $results = $search->searchbyname($request->valor);
                $variable = $request->valor;
                $text = $request->type;
                return view('resultados', compact('results', 'text','variable'));
                break;
            case 'empresa':
                $search = new OfertanteController();
                $results = $search->searchbyname($request->valor);
                $variable = $request->valor;
                $text = $request->type;
                return view('resultados', compact('results', 'text','variable'));
                break;
            case 'oferta':
                $search = new OfertaController();
                $results = $search->searchbycontent($request->valor);
                $variable = $request->valor;
                $text = $request->type;
                return view('resultados', compact('results', 'text','variable'));
                break;
            case 'post':
                $search = new PostController();
                $results = $search->searchbycontent($request->valor);
                $variable = $request->valor;
                $text = $request->type;
                return view('resultados', compact('results', 'text','variable'));
                break;
        }
    }
}
