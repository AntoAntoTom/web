<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>

</head>

<body>
<center>
    <h2>Student Registration Form</h2>
    <form method="post" action="">
        <table>
            <tr>
                <td>
                    <label for="fname">First Name:</label>
                    </td><td><input type="text" name="fname" maxlength="30" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="lname">Last Name:</label>
                    </td><td><input type="text" name="lname" maxlength="30" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="dob">Date Of Birth:</label>
                    </td><td><input type="date" name="dob" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="mail">Email:</label>
                    </td><td><input type="email" name="mail" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="pno">Mobile Number:</label>
                    </td><td><input type="tel" name="pno" pattern="[0-9]{10}" required>
                </td>
            </tr>

            <tr>
                <td class="gender">
                    <label>Gender:</label>
                    </td><td><label><input type="radio" name="gender" value="male" required> Male</label>
                    <label><input type="radio" name="gender" value="female" required> Female</label>
                </td>
            </tr>

            <tr>
                <td>
                    <label for="password">Password:</label>
                    </td><td><input type="password" name="password" maxlength="30" required>
                </td>
            </tr>

            <tr>
                <td colspan="2" align="center">
                    <button type="submit" name="submit" value="submit">Submit</button>
                </td>
            </tr>
        </table>
        <p class="login-link">Already have an account? <a href="index.php">Login</a></p>
    </form>
</center>
    <?php
    session_start();

    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "studentlogin";

    $conn = mysqli_connect($host, $username, $password, $database);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if (isset($_POST['submit'])) {
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $dob = $_POST["dob"];
        $mail = $_POST["mail"];
        $pno = $_POST["pno"];
        $gender = $_POST["gender"];
        $password = $_POST["password"];

        $sql = "INSERT INTO students (fname, lname, dob, mail, pno, gender, password) 
            VALUES ('$fname', '$lname', '$dob', '$mail', '$pno', '$gender','$password')";

        if (mysqli_query($conn, $sql)) {
            $_SESSION['registration_success'] = true;
            echo '<script>alert("Registration completed successfully"); window.location.href = "index.php";</script>';
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

    mysqli_close($conn);
    ?>

</body>

</html>