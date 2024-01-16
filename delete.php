<?php

$conn = new mysqli('localhost', 'root', '', 'crudmain');

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $employeeId = $_GET['id'];
    $sql = "DELETE FROM users WHERE id = $employeeId";

    if ($conn->query($sql) === TRUE) {
        header("Location: home.php");
    } else {
        echo 'Error deleting record: ' . $conn->error;
    }

} else {
    echo 'Invalid request.';
}

$conn->close();

?>