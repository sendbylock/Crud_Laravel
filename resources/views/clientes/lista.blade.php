@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
				
                <div class="panel-heading">
					<a class="pull-rigth btn btn-sm btn-success" href="{{ url('clientes/novo') }}">Adicionar Cliente</a>
					</div>

                <div class="panel-body">
					@if(Session::has('mensagem'))
						<div class="alert alert-success" role="alert">{{Session::get('mensagem')}}</div>
					@endif
					
					<table class="table table-hover">
						<tr>
							<td class="info">Nome</td>
							<td class="info">Cidade</td>
							<td class="info">Estado</td>
							<td class="info">Hobbie</td>
							<td class="info">Ações</td>
							
						</tr>
						
						@foreach($clientes as $cliente)
						<tr>
							<td class="active">{{$cliente->nome}}</td>
							<td class="success">{{$cliente->cidade_id}}</td>
							<td class="active">{{$cliente->cidade_id}}</td>
							<td class="success">{{$cliente->cidade_id}}</td>
							<td class="active">
								<a href="clientes/{{$cliente->id}}/editar" class="btn btn-xs btn-primary">Editar</a>
								{!! Form::open(['method'=>'DELETE', 'url' => '/clientes/'.$cliente->id, 'style' => 'display: inline;']) !!}
								<button type="submit" class="btn btn-xs btn-danger">Excluir</button>
								{!! Form::close() !!}
							</td>
						</tr>
						@endforeach
					</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection