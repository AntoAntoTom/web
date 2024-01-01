<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details Form</title>
</head>
<body>
    <h2>Student Details Form</h2>

    <form method="POST" action="">
        <label for="name">Name:</label>
        <input type="text" name="name" ><br>

        <label for="email">Email:</label>
        <input type="email" name="email" ><br>

        <label for="address">Address:</label>
        <textarea name="address" rows="4" ></textarea><br>

        <label for="gender">Gender:</label>
        <select name="gender" >
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select><br>

        <label for="dob">Date of Birth:</label>
        <input type="date" name="dob" ><br>

        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if(isset($_REQUEST['submit'])){
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $address = $_REQUEST['address'];
        $gender = $_REQUEST['gender'];
        $dob = $_REQUEST['dob'];
        ?>
        <table border="1">
        <tr><td colspan='2'><h5 align="center">Student Details</h5></td></tr>
        <tr><td>Name:</td><td> <?php echo $name?></td></tr>
        <tr><td>Email:</td><td> <?php echo $email?></td></tr>
        <tr><td>Address:</td><td> <?php echo $address?></td></tr>
        <tr><td>Date of Birth:</td><td> <?php echo $dob?></td></tr>
           
        </table>
    <?php }?>

</body>
</html>

