<?php
include "config.php";

$id = $_GET['id'];

$sql = "SELECT * FROM students WHERE id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $dept = $_POST["department"];

    $update = "UPDATE students 
               SET name='$name', email='$email', department='$dept' 
               WHERE id=$id";

    if (mysqli_query($conn, $update)) {
        header("Location: index.php");
    }
}
?>

<!DOCTYPE html>
<html>
<head><title>Edit</title></head>
<body>

<h2>Edit Student</h2>

<form method="post">
    Name: <input type="text" name="name" value="<?php echo $row['name']; ?>"><br><br>
    Email: <input type="email" name="email" value="<?php echo $row['email']; ?>"><br><br>
    Department: <input type="text" name="department" value="<?php echo $row['department']; ?>"><br><br>
    <input type="submit" value="Update">
</form>

</body>
</html>