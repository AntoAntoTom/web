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
if($no>=60 && $no<=100){
echo "first division";
}
else if($no>=45){
echo "second division";
}
else if($no>=33){
echo "third division";
}
else if($no>=0){
echo "Faild";
}
else{
echo "Ivalid input";
}
}
?>
