<?php
// Database credentials
$servername = "sql306.infinityfree.com";
$username = "if0_39581565";
$password = "daYgAUUetr";
$dbname = "if0_39581565_contactform";

// Create database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Ensure form is submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get and sanitize POST values
  $name = htmlspecialchars(trim($_POST['name']));
  $email = htmlspecialchars(trim($_POST['email']));
  $message = htmlspecialchars(trim($_POST['message']));

  // Use prepared statement to prevent SQL injection
  $stmt = $conn->prepare("INSERT INTO messages (name, email, message) VALUES (?, ?, ?)");
  $stmt->bind_param("sss", $name, $email, $message);

  // Execute and check result
  if ($stmt->execute()) {
    echo "Message sent successfully!";
  } else {
    echo "Error: " . $stmt->error;
  }

  // Close statement and connection
  $stmt->close();
  $conn->close();
} else {
  echo "Invalid request method!";
}
?>
