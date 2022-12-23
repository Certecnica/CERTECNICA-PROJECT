<!DOCTYPE html>

<html lang="en">

<head>

<title>Online Quiz</title>

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body class="m-4">

<a href="index.php" >

<div class="mt-4 p-5 bg-primary text-white rounded">

  <h1>Online Quiz</h1>

</div>

</a> <br />

<form name="quiz" method="post" action="quiz.php">

  <?php

 
$mysqli =mysqli_connect("localhost","root","","apsystem");   

 

// Check connection

if ($mysqli -> connect_errno) {

echo "Failed to connect to MySQL: " . $mysqli -> connect_error;

exit();

}

error_reporting(0); 

if($_POST["do"]=="finish")

{

$rans=$_POST["rans"];

$tq=$_POST["tq"];

$end=$_POST["end"];

$startposition=$_POST["startposition"];

echo "<table cellpadding='5px' align='center' style='border:1px solid silver' width='100%' >";

echo "<tr><td>Total Question Attempt</td><td>",$tq,"</td><tr>";

echo "<tr><td>Correct Answer</td><td>",$rans,"</td></tr>";

echo "<tr><td>Wrong Answer</td><td>",$tq-$rans,"</td></tr>";

echo "<tr><td>Correct Answer Percentage</td><td>",$rans/$tq*100,"%</td></tr>";

echo "<tr><td>Wrong Answer Percenntage</td><td>",($tq-$rans)/$tq*100,"%</td></tr>";

echo "</table><br><br>";

$query="select * from quiz where qid<='$end' and qid>='$startposition'";

echo "<table cellpadding='5px' align='center' style='border:1px solid silver; width:100%'>";

echo "<tr><th colspan='4' id='heading'>Online Quiz Test Question</td></tr>";

$result=mysqli_query($mysqli,$query);

while ($row = mysqli_fetch_array($result)) {

 echo "<tr><td>",$row[0],"</td><td colspan='2'>",$row[1],"</td></tr><tr><td></td>";

echo "<td colspan='2'>A. ",$row[2],"</td>";

echo "<td colspan='2'>B. ",$row[3],"</td></tr>";

echo "<tr><td></td><td colspan='2'>C. ",$row[4],"</td>";

echo "<td colspan='1'>D. ",$row[5],"</td></tr>";

echo "<tr><td colspan='4' align='right' style='color:orange'>Correct option is ",strtoupper($row[6]),"</td></tr>";

echo "<tr><td colspan='4' align='right' style='color:orange'><hr></td></tr>";

 }

 echo "</table>";

 echo "<p align='right'><a href='#' onclick='window.print()'>Print</a></p>";

 echo "<div style='visibility:hidden;display:none'>";

}

?>

  <table cellpadding="5px" width="100%" style="border:1px solid silver">

    <?php

$start=$_POST["start"];

$s=$_POST["startposition"];

if($start==NULL)

{

$start=$_GET["start"];

$s=$_GET["start"];

}

$useropt=$_POST["useropt"];

$qid=$_POST["qid"];

$rans=$_POST["rans"];

$name=$_POST["name"];

$totalquestion=$_POST["totalquestion"];

if($start==NULL)

$query="select * from quiz where qid='1'";

else

{

$query="select * from quiz where qid='$start'";

}

$result=mysqli_query($mysqli,$query);

while ($row = mysqli_fetch_array($result)) {

    echo "<tr><td>",$row[0],"</td><td colspan='2'>",$row[1],"</td></tr><tr><td></td><td colspan='2'><input type='radio' name='useropt' value='a' />  ",$row[2],"</td><td colspan='2'><input type='radio' name='useropt' value='b' /> ",$row[3],"</td></tr><tr><td></td><td colspan='2'><input type='radio' name='useropt' value='c' /> ",$row[4],"</td><td colspan='2'><input type='radio' name='useropt' value='d' /> ",$row[5],"</td></tr>";

echo "<tr ><td colspan='5' align='right'><input type='hidden' name='name' value='",$name,"'><input type='hidden' name='start' value='",$row[0]+1,"'><input type='hidden' name='qid' value='",$row[0],"'><input type='hidden' name='startposition' value='",$s,"'><input type='submit' value='Next Question'><input type='hidden' name='totalquestion' value='",$totalquestion+1,"'>";

 echo "</td></tr>";

}

echo "<tr><td colspan='4'>";

$query="select woptcode from quiz where qid='$qid'";

 $result=mysqli_query($mysqli,$query);

 while ($row = mysqli_fetch_array($result)) {

 if(strcmp($row[0],$useropt)==0)

 {

 echo "<input type='hidden' name='rans' value='",$rans+1,"'>";

 $rans=$rans+1;

 }

 else

 echo "<input type='hidden' name='rans' value='",$rans,"'>";

 }

 echo "</td></tr>";

?>

  </table>

  <center>

  <br />

  <br />

</form>

<form method="post" action="quiz.php">

  <input type="hidden" name="do" value="finish" />

  <input type="hidden" name="rans" value="<?php echo $rans;?>" />

  <input type="hidden" name="name" value="<?php echo $name;?>" />

  <input type="hidden" name="tq" value="<?php echo $totalquestion;?>" />

  <input type="hidden" name="end"  value="<?php echo $start-1;?>" />

  <input type="hidden" name="startposition" value="<?php echo $s;?>" />

  <input type="submit" value="Finish Online Test"  />

</form>

</body>

</html>