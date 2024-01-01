<html>
<head></head>
<body>
    <form name="myform" action="" method="GET">
        <p>Enter a number to find factorial:</p>
        <input type="number" name="num"></input>
        <input type="submit" name="sub" value="submit"></input>
    </form>
</body>
</html>

<?php
if(isset($_GET['sub'])){
    $number = $_GET["num"];
    echo "<br>";

    if ($number == 0) {
        echo "1";
    } else {
        $sum = 1; // Initialize $sum to 1 for factorial
        for ($i = 1; $i <= $number; $i++) {
            $sum = $sum * $i;
        }
        echo "factorial of ".$number." is :".$sum;
    }
}
?>

