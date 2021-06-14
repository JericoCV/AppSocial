<?php

namespace App\Http\Controllers;
use App\Models\Ofertante;
use Illuminate\Http\Request;

class OfertaController extends Controller
{
    public function createoffer(Ofertante $usertype){
        return view('Oferta.nuevaoferta', compact('usertype'));
    }
    public function saveoffer(Ofertante $usertype, Request $request){
        $request->validate([
            'descripcion' => 'required',
            'fechacierre' => 'required',
            'mensaje1' =>'required',
            'mensaje2' =>'required',
            'ambito' => 'required',
            'remuneracion' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $oferta = new Oferta();
        $oferta->userid = $usertype->id;
        $oferta->descripcion = $request->descripcion;
        $oferta->fechacierre = $request->fechacierre;
        $oferta->mensaje1 = $request->mensaje1;
        if (!empty($request->mensaje2)){
            $oferta->mensaje2 = $request->mensaje2;
        }else{
            $oferta->mensaje2 = 'No te desanimes y sigue intentandolo';
        }
        $oferta->ambito = $request->ambito;
        $oferta->estado = 'vigente';
        $oferta->remuneracion = strval($request->remuneracion);
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $oferta->multimedia = $imageName;
        $oferta->save();
        return view('Oferta.nuevaoferta', compact('usertype'));    }
    public function myoffers(Ofertante $usertype){
        $myoffers = Oferta::where('userid',$usertype->id)->get();
        return $myoffers;
    }
    public function offeredit(Ofertante $usertype,Oferta $offer){
        return view('Oferta.editaroferta', compact('usertype','offer'));
    }
    public function offerupdate(Ofertante $usertype, Oferta $offer, Request $request){
        $request->validate([
            'descripcion' => 'required',
            'fechacierre' => 'required',
            'mensaje1' =>'required',
            'mensaje2' =>'required',
        ]);
        $offer->descripcion = $request->descripcion;
        $offer->fechacierre = $request->fechacierre;
        $offer->mensaje1 = $request->mensaje1;
        $offer->mensaje2 = $request->mensaje2;
        $offer->save();
        return view('Oferta.editaroferta', compact('usertype','offer'));
    }
    ///////////////
    public function searchbycontent(string $value){
        $results = Oferta::where(function ($query) use ($value) {
            return $query->where('descripcion', 'LIKE', '%'.$value.'%')
                ->orWhere('ambito', 'LIKE', '%'.$value.'%');})->get();
        return $results;
    }

}
