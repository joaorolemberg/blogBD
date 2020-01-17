<html>
    <head>
        <title>CCM-Centro de Cosmologia Mundial</title>
        @yield('css-view')
        <link rel="stylesheet" href="{{asset('css/stylesheet.css')}}">
    </head>
    <header id="cabecalhoMaster">
        <div>
            <h1>Centro de Cosmologia Mundial</h1>
        </div>

        <div id="menuLogout">
            <a href="">Home</a>
            <a href="">Logout</a>
            <a href="">Sobre o sistema</a>

        </div >

        <div id="menuEntidades">
            <a href="">Planetas</a>
            <a href="">Estrelas</a>
            <a href="">Satélites</a>
            <a href="">Sistemas</a>
            <a href="">Galáxias</a>

        </div>
        


    </header>
    <body id ="master">
        @include("templates.menu-lateral")
        @yield('conteudo-view')
        @yield('js-view')
        
    </body>
</html>