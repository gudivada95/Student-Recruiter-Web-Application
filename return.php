<html>
    <head>
        <title>Student Detail</title>
    </head>
<?php
require 'connection.php';
$conn    = Connect();
$returnFirstName = $conn->real_escape_string($_POST['returnFirstName']);
$returnLastName = $conn->real_escape_string($_POST['returnLastName']);
$returnDob = $conn->real_escape_string($_POST['returnDob']);



$query   = "SELECT * FROM student_output WHERE firstName = '$returnFirstName' AND lastName = '$returnLastName' AND birthDate = '$returnDob'";

$result = mysqli_query($query);



$success = $conn->query($query);
if (!$success) {
    die("Error: ".$conn->error);
}

echo  $result;
echo "success";
?>

<table>
    <tr>
        <th>Field</th>
        <th>Value</th>
    </tr>
    <tr>
        <td>First Name</td>
        <td><?php echo $result['firstName'] ?></td>
    </tr>
</table>
<?php
$conn->close();
?>
</html>
