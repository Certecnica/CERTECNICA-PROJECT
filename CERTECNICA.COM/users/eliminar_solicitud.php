<?php include 'includes/session.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Solicitud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="../images/favicon.jpg" />

</head>

<body>
    
    <div class="container mt-5">
    <div class="row">
    <div class="col-sm-6 offset-sm-3">
    <div class="alert alert-danger text-center">
    <p>¿Desea confirmar la cancelación de la Solicitud?</p>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <form action="function_solicitud_user.php" method="POST">
            <center>  

            <input type="hidden" name="accion" value="eliminar_registro">
                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                <div class="boton-eliminar">
                    <input type="submit"  name="" value="Confirmar" class= " btn btn-danger" >
                              <a href="home.php" class="btn btn-success">Volver</a></center>
</center>
                </div>

        </div>
    </div>



    </body>
    </html> 