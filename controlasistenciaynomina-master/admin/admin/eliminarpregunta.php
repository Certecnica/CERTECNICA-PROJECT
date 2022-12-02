<?php

    include("includes/conn.php");
    $id = $_GET['idPregunta'];

    $query = "DELETE FROM preguntas WHERE id = '$id'";
    mysqli_query($conn, $query);
?>
<script>
    window.location.href = 'listadopreguntas.php';
</script>