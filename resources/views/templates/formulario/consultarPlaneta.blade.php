<div id="planetaConsultar" class="formInterno">
    <h3>Consultar Planeta</h3>
    {!! Form::open(['method'=> 'post','class'=> 'form-padrao'])!!}
    
    <label id="id_consultarPlaneta">
        <span>ID: </span>
        {!! Form:: text('id',null,['class'=>'input','placeholder'=>"ID do Planeta"])!!}
        {!!Form::submit('Buscar por ID') !!}
    </label>
    <br>
    <label id="nome_consultarPlaneta">
        <span>Nome: </span>
        {!! Form:: text('nome',null,['class'=>'input','placeholder'=>"Nome do Planeta"])!!}
        {!!Form::submit('Buscar por nome') !!}
    </label>
    <br>
    {!! Form::close() !!}
</div>