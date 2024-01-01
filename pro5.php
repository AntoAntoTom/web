<html>
<head></head>
<body>
<form method="POST" action="">
<input type="number" name="num"></input>
<input type="submit"></input>
</form>
</body>
</html>


<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
$no=$_POST["num"];
$total=0;
if($no<=50){
$total=$no*3.5;
}
else if($no<=150){
$total=(50*3.5)+(($no-50)*4.00);
}
else if($no<=250){
$total=(50*3.5)+(100*40)+(($no-150)*5.2);
}
else{
$total=(50*3.5)+(100*4)+(100*5.2)+(($no-250)*6.5);
}

echo $total;
}
?>
