<?php include 'includes/session.php';?>

<?php 

$id = $_GET['id'];

$sql = "SELECT * FROM solicitudes WHERE id = $id";

$resultado = mysqli_query($conn,$sql);

$usuario = mysqli_fetch_assoc($resultado);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> RECHAZAR SOLICITUD </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="../images/favicon.jpg" />
</head>
<body>
    <div class="container mt-5">
    <div class="row">
    <div class="col-sm-6 offset-sm-3">
    <div class="alert alert-danger text-center">
    <p> ¿Cual es el motivo por el cual es rechazada la solicitud? </p>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <form action="functions_rechazar_calidad.php" method="POST">
            <div class="form-group">
    <label for="rechazo_comercial"></label>
    <input class="form-control" id="rechazo_calidad" name="rechazo_calidad" value="<?php echo $usuario['comentario_JF'];?>" required> 
</div>       
<br>
<br>
                <center><input type="hidden" name="accion" value="editar_registro">
                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                <div class="boton-eliminar">    
                              <input type="submit"  name="" value="Rechazar" class= "btn btn-danger" >
                              <a href="comercial_pendientes.php" class="btn btn-success">Cancelar</a></center>
                </div>
        </div>
    </div>
    </body>
    </html> 