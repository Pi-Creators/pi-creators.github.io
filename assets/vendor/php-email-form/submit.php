<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];

    // Process the data (e.g., save to a database)
    // For now, let's just echo the data
    echo "Name: $name<br>";
    echo "Email: $email<br>";
}
?>