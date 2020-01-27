<div id="planetaInserir" class="formInterno">

        <h3>Inserir Planeta</h3>
        {!! Form::open(['method'=> 'post','class'=> 'form-padrao'])!!}
            <label id="nome_planetaInserir">
                
                <span>Nome: </span>
                {!! Form:: text('nome',null,['class'=>'input','placeholder'=>"Nome do Planeta"])!!}
            </label>
            <br>
            <label id="tamanho_planetaInserir">
                <span>Tamanho: </span>
                {!! Form:: text('tamanho',null,['class'=>'input','placeholder'=>"Tamanho do Planeta"])!!}
            </label>
            <br>
            <label id="massa_planetaInserir">
                <span>Massa: </span>
                {!! Form:: text('massa',null,['class'=>'input','placeholder'=>"Massa do Planeta"])!!}
            </label>
            <br>
            <label id="gravidade_planetaInserir">
                <span>Gravidade: </span>
                {!! Form:: text('gravidade',null,['class'=>'input','placeholder'=>"Gravidade do Planeta"])!!}
            </label>
            <br>
            <label id="composicao_planetaInserir">
                <span>Composição: </span>
                {!! Form:: text('composicao',null,['class'=>'input','placeholder'=>"Composição do Planeta"])!!}
            </label>
            <br>   
                {!!Form::submit('Inserir') !!}
        
        {!! Form::close() !!}

    </div>