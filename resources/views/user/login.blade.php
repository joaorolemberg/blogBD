<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <title>
                Login |  CCM
        </title>
        <link rel="stylesheet" href="{{asset('/css/stylesheet.css')}}">
    </head>
    <body>
       <div id="container-all" class="container">
    
            
                <section id="conteudo-view" class="login">

                    <h1>CCM</h1>
                    <h2>Centro de Cosmologia Mundial</h2>

                    {!! Form::open(['route'=> 'user.login','method' => 'post'])!!}
                    
                    <p>Entre no sistema</p>

                    <label>
                        {!! Form:: text('username',null,['class'=>'input','placeholder'=>"Usuário"])!!}
                    </label>

                    <label>
                    {!! Form:: password('password',['placeholder'=>"Senha"])!!}
                    </label>
                    
                    {!!Form::submit('Entrar')!!}

                    {!! Form::close()!!}    
                </section>
            
        </div>

    </body>



</html>