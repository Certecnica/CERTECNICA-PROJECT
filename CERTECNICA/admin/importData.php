<?php
// Load the database configuration file
include_once 'includes/conn.php';

if(isset($_POST['importSubmit'])){
    
    // Allowed mime types
    $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv','text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
    
    // Validate whether selected file is a CSV file
    if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $csvMimes)){
        
        // If the file is uploaded
        if(is_uploaded_file($_FILES['file']['tmp_name'])){
            
            // Open uploaded CSV file with read-only mode
            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
            
            // Skip the first line
            fgetcsv($csvFile);
            
            // Parse data from CSV file line by line
            while(($line = fgetcsv($csvFile)) !== FALSE){
                // Get row data
                $nombres   = $line[0];
                $apellidos  = $line[1];
                $fecha = $line[2];
                $hora_llegada = $line[3];
                $hora_salida = $line[4];
                // Check whether member already exists in the database with the same email
                    $conn->query("INSERT INTO llegadas (NOMBRES, APELLIDOS, FECHA, HORA_LLEGADA, HORA_SALIDA) VALUES ('".$nombres."', '".$apellidos."', '".$fecha."', '".$hora_llegada."','".$hora_salida."')");
                
            }
            
            // Close opened CSV file
            fclose($csvFile);
            
            $qstring = '?status=succ';
        }else{
            $qstring = '?status=err';
        }
    }else{
        $qstring = '?status=invalid_file';
    }
}

// Redirect to the listing page
header("Location: excel.php".$qstring);