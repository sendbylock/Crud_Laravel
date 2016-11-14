<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;


use App\Http\Controllers\Controller;
use Redirect;

class ClientesController extends Controller
{
	

   public function index()
    {
		$clientes  = Cliente::get();
        return view('clientes.lista', ['clientes'=>$clientes] );
    }
	
	public function novo()
    {
        return view('clientes.formulario');
    }
	
	public function salvar(Request $request)
    {
       $cliente = new Cliente();
       $cliente = $cliente->create($request->all());
	   
	   \Session::flash('mensagem', 'Cadastrado com sucesso');
	   return Redirect::to('clientes/novo'); //return back(); resolve tbm
    }
	
	public function editar($id)
	{
		$cliente = Cliente::findOrFail($id);
		return view('clientes.formulario', ['cliente' => $cliente]);
	}
	
	public function atualizar($id, Request $request)
    {
       $cliente = Cliente::findOrFail($id);
	   
	   $cliente->update($request->all());
	   
	   \Session::flash('mensagem', 'Atualizado com sucesso');
	   //return Redirect::to('clientes/'.$cliente->$id.'/editar');
	   return Redirect::to('clientes');  
	  
    }
	
	public function deletar($id)
	{
		\Session::flash('mensagem', 'Deletado com sucesso');
		$cliente = Cliente::findOrFail($id);
		$cliente -> delete();
		return Redirect::to('clientes');  
	}
	
}
