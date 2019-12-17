<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Empleados Comteco</title>
    
    {{-- css bootstrap --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css')}}" rel="stylesheet"> <!--load all styles -->


    <link href="{{ asset('css/all.css')}}" rel="stylesheet"> <!--load all styles -->
    <link href="{{ asset('css/estilos.css')}}" rel="stylesheet"> <!--load all styles -->


    {{-- js bootstrap --}}
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    
    {{-- <div class="fondo-cocha"></div> --}}
    <header>
        @include('inicio.nav')
    </header>
    
    <div>
        <div class="container">
            @yield('content')
        </div>
    </div>

    <footer class="mt-1">
        @include('inicio.footer')
    </footer>

    <script>
        // SCRIPT SEARCH
        $(document).ready(function(){
            $("#Search1").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#tabla1 tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
            });
        });
    </script>

    {{-- keyupp para el buscador --}}
    <script>
        window.addEventListener("load",function(){
            document.getElementById("texto").addEventListener("keyup",function(){
                if((document.getElementById("texto").value.length)>=0)
                    fetch(`/buscador?texto=${document.getElementById("texto").value}`,{
                        method:'get'
                    })
                    .then(response => response.text() )
                    .then(html => {
                        document.getElementById("resultados").innerHTML = html
                    })
                else
                    document.getElementById("resultados").innerHTML = html =""
                .catch(error => console.log(error))
            })
        })
    </script>
    
</body>
</html>