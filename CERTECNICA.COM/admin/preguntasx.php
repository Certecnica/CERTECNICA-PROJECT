<?php
include("includes/conn.php");

$id_examen=$_POST['id'];

$categoria=$_POST['categoria'];

$titulo=$_POST['titulo'];

 $preg=$_POST['preg'];
 $resp=$_POST['resp'];
 $A=$_POST['A'];
 $B=$_POST['B'];
 $C=$_POST['C'];
 $D=$_POST['D'];
 $numero=$_POST['numero'];//guarda el orden de las preguntas 
 //echo $id_examen;
$consulta="SELECT * FROM preguntas WHERE id_examen='$id_examen' ";
$resultado=$conn->query($consulta);
if (mysqli_num_rows($resultado)>0) {
// DESDE AQUI PROCEDE PARA AUTOINCREMENTAR NUMERO
	$consult="SELECT * FROM preguntas WHERE id_examen='$id_examen' ORDER BY numero DESC LIMIT 0,1 ";
	 $res=$conn->query($consult);
	 while ($row=$res->fetch_array()) {
	$numero=$row['numero'];
	
    $numeros=$numero+1;
	
    $actualizar="INSERT INTO preguntas (id_preguntas,id_examen,A,B,C,D,resp,preg,numero) VALUES (NULL,'$id_examen','$A','$B','$C','$D','$resp','$preg','$numeros' )";
	
    if ($resultado=$conn->query($actualizar)) {

	header("Location: evaluacion.php?id=$id&categoria=$categoria&titulo=$titulo");
	}else{
		echo "error en el proceso";
	}
		

	}

//select * from tabla order by id asc limit 1
//$actualizar="UPDATE examen SET preg1='$preg1', resp1='$resp1' WHERE id='$id' ";

}else{
//guardando desde cero

	$numeros=1;
	$actualizar="INSERT INTO preguntas (id_preguntas,id_examen,A,B,C,D,resp,preg,numero) VALUES (NULL,'$id_examen','$A','$B','$C','$D','$resp','$preg','$numeros' )";
	if ($resultado=$conn->query($actualizar)) {

	header("Location: evaluacion.php?id=$id&categoria=$categoria&titulo=$titulo");
	}else{
		echo "error en el proceso";
	}
		

//hasta aqui
}

?>