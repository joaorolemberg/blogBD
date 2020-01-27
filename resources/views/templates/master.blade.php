<html>
    <head>
        <title>CCM-Centro de Cosmologia Mundial</title>
        @yield('css-view')
        <link rel="stylesheet" href="{{asset('css/stylesheet.css')}}">
        <script type="text/javascript" src="<?php echo asset('js/script.js')?>"> </script>
        
    </head>
    
    <body id ="master">
        <div class="container"  id="containerAll">
            <header id="cabecalhoMaster">
                <div>
                    <h1>Centro de Cosmologia Mundial</h1>
                </div>

                <div id="menuLogout">
                    <a href="{{route ('user.homepage') }}">Home</a>
                    <a href="{{route ('user.logout') }}">Logout</a>
                    <a href="">Sobre o sistema</a>

                </div >

                <div id="menuEntidades">
                    <a href="{{route ('user.planetas') }}">Planetas</a>
                    <a href="">Estrelas</a>
                    <a href="">Satélites</a>
                    <a href="">Sistemas</a>
                    <a href="">Galáxias</a>

                </div>
                


            </header>
           
            </div>
            @yield('conteudo-view')
            @yield('js-view')
            
    </body>
</html>