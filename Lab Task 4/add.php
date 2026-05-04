<?php
include "config.php";

$success = $error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $reg = $_POST["registration_no"];
    $dept = $_POST["department"];

    if (empty($name) || empty($email) || empty($reg) || empty($dept)) {
        $error = "All fields required!";
    } else {
        $sql = "INSERT INTO students (name,email,registration_no,department)
                VALUES ('$name','$email','$reg','$dept')";

        if (mysqli_query($conn, $sql)) {
            $success = "Student added successfully";
        } else {
            $error = "Error: " . mysqli_error($conn);
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head><title>Add Student</title></head>
<body>

<h2>Add Student</h2>

<form method="post">
    Name: <input type="text" name="name"><br><br>
    Email: <input type="email" name="email"><br><br>
    Reg No: <input type="text" name="registration_no"><br><br>
    Department: <input type="text" name="department"><br><br>
    <input type="submit" value="Add">
</form>

<p style="color:green;"><?php echo $success; ?></p>
<p style="color:red;"><?php echo $error; ?></p>

<a href="index.php"><-- Back</a>

</body>
</html>