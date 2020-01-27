@extends('templates.master')

@section('css-view')

@endsection

@section('js-view')

@endsection

@section('conteudo-view')

    @include("templates.menu-lateral")

    <div id="planetaAlterarBD" class="formInterno">
    <h3> Planeta</h3>

    
            <label id="id_planetaAlterarBD">
                <span>ID: {{$id ?? null}} </span>
            </label>
            <br>
            <br>
            <label id="nome_planetaInserir">
                
                <span>Nome: {{$nome ?? null}} </span>
                
            </label>
            <br>
            <label id="tamanho_planetaInserir">
                <span>Tamanho: {{$tamanho ?? null}} </span>
                
            </label>
            <br>
            <label id="massa_planetaInserir">
                <span>Massa: {{$massa ?? null}} </span>
                
            </label>
            <br>
            <label id="gravidade_planetaInserir">
                <span>Gravidade:{{$gravidade ?? null}} </span>
                
            </label>
            <br>
            <label id="composicao_planetaInserir">
                <span>Composição: {{$composicao ?? null}} </span>
                
            </label>

           
    
</div>
    

        

@endsection

