@extends('templates.master')

@section('css-view')

@endsection

@section('js-view')

@endsection

@section('conteudo-view')

    @include("templates.menu-lateral")

    <div id="planetaConsultar" class="formInterno">
    <h3>Consultar e alterar planeta</h3>
    {!! Form::open(['method'=> 'post','class'=> 'form-padrao'])!!}
    
    <label id="id_consultarPlaneta">
        <span>ID: </span>
        {!! Form:: text('id', $id ?? null,['class'=>'input','placeholder'=>"ID do Planeta"])!!}
        {!!Form::submit('Buscar por ID') !!}
    </label>
    
    {!! Form::close() !!}

    
       

    
</div>
    

        

@endsection

