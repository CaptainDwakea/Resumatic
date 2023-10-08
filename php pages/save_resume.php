<?php
// Start the session if it's not already started
session_start();

// Check if the user is logged in and has a valid user_id in the session
if (!isset($_SESSION['user_id'])) {
    // Redirect to a login page or show an error message
    die("User is not logged in.");
}

// Retrieve the user_id from the session
$user_id = $_SESSION['user_id'];

// Establish a database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "resumatic";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Assuming you have a form submission, e.g., using POST method
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $designation = $_POST['designation'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phoneno = $_POST['phoneno'];
    $summary = $_POST['summary'];

    // Check if a row with the user_id already exists in the table
    $check_sql = "SELECT about_id FROM resumatic_about WHERE user_id = ?";
    $check_stmt = $conn->prepare($check_sql);
    $check_stmt->bind_param("i", $user_id);
    $check_stmt->execute();
    $check_result = $check_stmt->get_result();

    if ($check_result->num_rows > 0) {
        // If a row exists, update the existing row
        $update_sql = "UPDATE resumatic_about
                       SET firstname = ?,
                           middlename = ?,
                           lastname = ?,
                           designation = ?,
                           address = ?,
                           email = ?,
                           phoneno = ?,
                           summary = ?
                       WHERE user_id = ?";
        $update_stmt = $conn->prepare($update_sql);
        $update_stmt->bind_param("ssssssssi", $firstname, $middlename, $lastname, $designation, $address, $email, $phoneno, $summary, $user_id);

        if ($update_stmt->execute()) {
            // Data update was successful
            echo "Data updated successfully!";
        } else {
            // Data update failed
            echo "Error: " . $update_stmt->error;
        }
    } else {
        // If no row exists, insert a new row
        $insert_sql = "INSERT INTO resumatic_about (user_id, firstname, middlename, lastname, designation, address, email, phoneno, summary)
                       VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $insert_stmt = $conn->prepare($insert_sql);
        $insert_stmt->bind_param("issssssss", $user_id, $firstname, $middlename, $lastname, $designation, $address, $email, $phoneno, $summary);

        if ($insert_stmt->execute()) {
            // Data insertion was successful
            echo "Data inserted successfully!";
        } else {
            // Data insertion failed
            echo "Error: " . $insert_stmt->error;
        }
    }

}
    // Close the database connection
    $conn->close();

?>
