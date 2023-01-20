<?php
$id= $_GET['id'];
$conn= mysqli_connect("localhost", "root", "", "apsystem");
$consulta= "SELECT * FROM dotacion WHERE id = $id";
$resultado = mysqli_query($conn, $consulta);
$usuario = mysqli_fetch_assoc($resultado);
?>
<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros</title>   
    <link rel="stylesheet" href="../css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body id="page-top">
<form  action="_functions.php" method="POST">
<div id="login" >
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                            <br>
                            <br>
                            <h3 class="text-center">Editar usuario</h3>
                            <div class="form-group">
                            <div class="form-group"  name="empleado" id="empleado">
                            <input  type="text" name="empleado" class="form-control" id="empleado" placeholder="INGRESE LA TALLA DE CAMISA" value="<?php echo $usuario['EMPLEADO'];?>">
                   </div>
                           <br>
                      <input  type="text" name="camisa" class="form-control" id="camisa" placeholder="INGRESE LA TALLA DE CAMISA" value="<?php echo $usuario['TALLA_CAMISA'];?>">
                      <br>
                      <input  type="text" name="calzado" class="form-control" id="calzado" placeholder="INGRESE LA TALLA DE CALZADO" value="<?php echo $usuario['TALLA_CALZADO'];?>">
                      <br>
                      <input  type="text" name="chaqueta" class="form-control" id="chaqueta" placeholder="INGRESE LA TALLA DE CHAQUETA" value="<?php echo $usuario['TALLA_CHAQUETA'];?>">
                      <br>
                      <input  type="text" name="pantalon" class="form-control" id="pantalon" placeholder="INGRESE LA TALLA DE PANTALON" value="<?php echo $usuario['TALLA_PANTALON'];?>">
                      <br>
                            </div>
                                <input type="hidden" name="accion" value="editar_registro">
                                <input type="hidden" name="id" value="<?php echo $id;?>">
                            </div>
                                 <br>
                                <div class="mb-3">
                                <button type="submit" class="btn btn-success" >Editar</button>
                               <a href="index.php" class="btn btn-danger">Cancelar</a>
                            </div>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</body>

