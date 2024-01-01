<html>
<head></head?
<body>
<form name="myform" action=" " method="GET">
<p>Enter a number to check odd or evevn:<p><input type="number" name="num"></input>
<input type="submit" name="sub" value="submit"></input>
<form>
</body>

</html>
<?php
if(isset($_GET['sub'])){
$number=$_GET["num"];
echo"<br>";
if($number==0)
echo $number." number is neither negitive nor positive";
else if($number%2==0)
echo $number."is even";
else
echo $number."is odd";
}
?>
