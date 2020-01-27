@extends('templates.master')

@section('css-view')

@endsection

@section('js-view')

@endsection

@section('conteudo-view')

    @include("templates.menu-lateral")

    <div id="planetaAlterarBD" class="formInterno">
    <h3>Consultar e alterar planeta</h3>
    
    
    
    
    

    {!! Form::open(['method'=> 'post','class'=> 'form-padrao'])!!}
            <label id="id_planetaAlterarBD">
                <span>ID: {{$id ?? null}} </span>
            </label>
            <br>
            <br>
            <label id="nome_planetaInserir">
                
                <span>Nome: </span>
                {!! Form:: text('nome',$nome ?? null,['class'=>'input','placeholder'=>"Nome do Planeta"])!!}
            </label>
            <br>
            <label id="tamanho_planetaInserir">
                <span>Tamanho: </span>
                {!! Form:: text('tamanho',$tamanho ?? null,['class'=>'input','placeholder'=>"Tamanho do Planeta"])!!}
            </label>
            <br>
            <label id="massa_planetaInserir">
                <span>Massa: </span>
                {!! Form:: text('massa',$massa ?? null,['class'=>'input','placeholder'=>"Massa do Planeta"])!!}
            </label>
            <br>
            <label id="gravidade_planetaInserir">
                <span>Gravidade: </span>
                {!! Form:: text('gravidade',$gravidade ?? null,['class'=>'input','placeholder'=>"Gravidade do Planeta"])!!}
            </label>
            <br>
            <label id="composicao_planetaInserir">
                <span>Composição: </span>
                {!! Form:: text('composicao',$composicao ?? null,['class'=>'input','placeholder'=>"Composição do Planeta"])!!}
            </label>

                {!!Form::submit('Alterar') !!}
        
        {!! Form::close() !!}

    
</div>
    

        

@endsection

