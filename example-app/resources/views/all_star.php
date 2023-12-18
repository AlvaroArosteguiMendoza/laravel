<!DOCTYPE html>
<html>
<head>
    <title>Lista de Numeros</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body{
            background-color:black;
            color:yellow;
        }
             /* Estilos para la lista */
             ul {
            list-style: none;
            padding: 2;
        }

        li {
            padding: 8px;
            margin-bottom: 5px;
            border-radius: 5px;
            text-align:center;
            width:10%;
            margin:auto;
        }

        #btnMostrarNumeros {
            padding: 10px 20px;
            font-size: 16px;
            background-color: yellow;
            color: black;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin:auto;
        }

    </style>
</head>
<body>
<H1>All Star</H1>
<button id="btnMostrarNumeros">Mostrar Letra</button>
<ul id="listaNumeros"></ul>

<script>
    $(document).ready(function(){
        $('#btnMostrarNumeros').on('click', function(){
            $.ajax({
                type: 'GET',
                url: 'http://127.0.0.1:8000/mostrar-animales',
                dataType: 'json',
                success: function(response){
                    var numeros = response.datos; 

                  
                    $('#listaNumeros').empty();

                    
                    numeros.forEach(function(numero) {
                        $('#listaNumeros').append('<li>' + numero + '</li>');
                    });
                },
                error: function(error){
                    console.log(error);
                }
            });
        });
    });
</script>

</body>
</html>


