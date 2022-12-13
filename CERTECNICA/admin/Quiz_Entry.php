<!DOCTYPE html>

<html lang="en">

<head>

<title>Online Quiz</title>

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body class="m-4">

<a href="index.php" >

<div class="mt-4 p-5 bg-primary text-white rounded">

  <h1>Online Quiz</h1>

</div>

</a>

<?php

 
$mysqli =mysqli_connect("localhost","root","","apsystem");   

 

// Check connection

if ($mysqli -> connect_errno) {

echo "Failed to connect to MySQL: " . $mysqli -> connect_error;

exit();

}

 error_reporting(0);

 if($_POST["do"]=="quiz")

{

$question=$_POST["question"];

$opt1=$_POST["opt1"];

$opt2=$_POST["opt2"];

$opt3=$_POST["opt3"];

$opt4=$_POST["opt4"];

$woptcode=$_POST["woptcode"];

$query="select * from quiz ";

$temp=1;

 $result=mysqli_query($mysqli,$query);

while ($row = mysqli_fetch_array($result)) {

$temp=$temp+1;

}

$query="insert into quiz values($temp,'$question','$opt1','$opt2','$opt3','$opt4','$woptcode')";

$result=mysqli_query($mysqli,$query);

echo "<br><br><center>successfully Saved</center><br><br>";

}

?>

<form method="post" >

  <table align="center" class="table table-hover" >

    <tr>

      <td colspan="2" class="table-dark">Online Quiz Test Question Entry Module</td>

    </tr>

    <tr>

      <td>Enter Question here </td>

      <td><input type="text" name="question" style="width:100%"  /></td>

    </tr>

    <tr>

      <td>Enter First option</td>

      <td><input type="text" name="opt1"  style="width:100%" /></td>

    </tr>

    <tr>

      <td>Enter Second option</td>

      <td><input type="text" name="opt2"  style="width:100%" /></td>

    </tr>

    <tr>

      <td>Enter Third option</td>

      <td><input type="text" name="opt3"  style="width:100%" /></td>

    </tr>

    <tr>

      <td>Enter Fourth option</td>

      <td><input type="text" name="opt4"   style="width:100%"/></td>

    </tr>

    <tr>

      <td>Select Right Option code</td>

      <td><select name="woptcode"  style="width:100%">

          <option value="a">A</option>

          <option value="b">B</option>

          <option value="c">C</option>

          <option value="d">D</option>

        </select>

      </td>

    </tr>

    <tr>

      <td colspan="2" align="center"><input type="hidden" name="do" value="quiz" />

        <input type="submit" value="SAVE QUESTION"  class='btn btn-primary' />

      </td>

    </tr>

  </table>

</form>

</body>

</html>