<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web_Anto";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details Form</title>
</head>
<body>
    <h2>Book Details Form</h2>

    <form method="POST" action="">
        <label for="name">Name:</label>
        <input type="text" name="name" ><br>

        <label for="email">Title:</label>
        <input type="email" name="title" ><br>

        <label for="address">edition:</label>
        <input type="text" name="edi" ><br>

        <label for="dob">publisher:</label>
        <input type="text" name="pub" ><br>

        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if(isset($_REQUEST['submit'])){
        $name = $_REQUEST['name'];
        $title = $_REQUEST['title'];
        $edition = $_REQUEST['edi'];
        $publisher = $_REQUEST['pub'];
     	$sql = "INSERT INTO book (book_no,title,edition,publisher)VALUES ('$name','$title','$edition','$publisher');

if ($conn->query($sql) === TRUE) {
echo "New record created successfully<br>";
} else {
echo "Error: <br>" . $conn->error;
} 
$qry="SELECT * FROM book";
$result = mysqli_query($conn, $qry);

if (mysqli_num_rows($result) > 0) {
    echo "<h2>Book Details:</h2>";
    echo "<table border='1'>";
    echo "<tr><th>Book No</th><th>Title</th><th>Edition</th><th>Publisher</th></tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>{$row['book_no']}</td><td>{$row['title']}</td><td>{$row['edition']}</td><td>{$row['publisher']}</td></tr>";
    }

    echo "</table>";
} else {
    echo "No books found.";
}
        $conn->close();
    <?php }?>

</body>
</html>

