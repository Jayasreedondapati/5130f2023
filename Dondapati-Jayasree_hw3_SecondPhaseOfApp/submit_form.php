<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection details
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dataentry";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $currentLocation = $_POST["currentLocation"];
    $cityOfBirth = $_POST["cityOfBirth"];
    $dreamDestination = $_POST["dreamDestination"];
    $role = $_POST["role"];
    $interests = $_POST["Interests"];

    $sql = "INSERT INTO dataentry (firstName, lastName, email, gender, currentLocation, cityOfBirth, dreamDestination, role, Interests)
    VALUES ('$firstName', '$lastName', '$email', '$gender', '$currentLocation', '$cityOfBirth', '$dreamDestination', '$role', '$interests')";

if ($conn->query($sql) === TRUE) {
echo "Data inserted successfully!";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
}
?>

