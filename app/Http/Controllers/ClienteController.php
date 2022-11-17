<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller {


    public function index(){
      
        //Cliente::where('id','=',11)->delete();
        $data['clientes'] = Cliente::all();
        return view('clientes',$data);
    }

    public function getCliente($id){
        $data['infos'] = Cliente::find($id);
        return view('cliente_single',$data);
    }

    public function inserir(Request $req){
        if($req->has('nome')){
            $cliente = new Cliente;
            $cliente->nome = $req->nome;
            $cliente->email = $req->email;
            $cliente->slug = $req->nome;
            $cliente->save();
        }
        $data['clientes'] = Cliente::all();
        return view('clientes',$data);
    }

}

?>