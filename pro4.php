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
if($no==1){
echo "sunday";
}
else if($no==2){
echo "Monday";
}
else if($no==3){
echo "Tuesday";
}
else if($no==4){
echo "Wednesday";
}
else if($no==5){
echo "Thursday";
}
else if($no==6){
echo "Friday";
}
else if($no==7){
echo "Satuerday";
}
else{
echo "Ivalid input";
}
}
?>
