@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
					<a class="pull-rigth btn btn-sm btn-success" href="{{ url('clientes') }}">Listagem de Cliente</a>
					</div>
                <div class="panel-body">
					@if(Session::has('mensagem'))
						<div class="alert alert-success" role="alert">{{Session::get('mensagem')}}</div>
					@endif
					
					@if(Request::is('*/editar'))
						
						{!! Form::model($cliente, ['method'=>'PATCH', 'url' => 'clientes/'.$cliente->id]) !!}
					@else
						{!! Form::open(['url' => 'clientes/salvar']) !!}
					@endif	
					
					{!! Form::open(['url' => 'clientes/salvar']) !!}
						{!! Form::label('nome','Nome') !!}
						{!! Form::input('text','nome',null,['class'=>'form-control','autofocus','placeholder'=>'Nome']) !!}			
						<br>
						{!! Form::label('cidade_id','Cidade') !!}
						{!! Form::input('text','cidade_id',null,['class'=>'form-control','autofocus','placeholder'=>'Cidade']) !!}
						<br>						
						{!! Form::label('estado_id','Estado') !!}
						{!! Form::input('text','estado_id',null,['class'=>'form-control','autofocus','placeholder'=>'Estado']) !!}
						<br>				
						{!! Form::label('hobbie_id','Hobbies') !!}
						{!! Form::input('text','hobbie_id',null,['class'=>'form-control','autofocus','placeholder'=>'Hobbies']) !!}
						<br>
						{!! Form::submit('Salvar',['class'=>'pull-left btn btn-primary'],'') !!} 
						
					{!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection