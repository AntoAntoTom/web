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
$no=$_POST['num'];
if($no>0){
echo "+ve";
}
else if($no<0){
echo "-ve";
}
else{
echo "Zero";
}
}
?>
