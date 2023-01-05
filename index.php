<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="lib/bootstrap-4.6.0-dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 id="mostrar_mensaje"></h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <span class="btn btn-danger" id="boton_mostrar">Mostrar</span>
            </div>
        </div>
    </div>
    <script src="lib/jquery-3.6.0/jquery-3.6.0.min.js"></script>
    <script src="lib/bootstrap-4.6.0-dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(() => {
            $('#boton_mostrar').click(() => {
                $.ajax({
                    type: 'POST',
                    url: 'control/documento-1.php',
                    data: {
                        'bandera_1': 'Hola'
                    },
                    success: resultado => {
                        $('#mostrar_mensaje').text(resultado);
                    }
                });
            });
        });
    </script>
</body>
</html>
<!-- Hola chicos a mimir! -->