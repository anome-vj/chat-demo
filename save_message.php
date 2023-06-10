<?php
// Connect to the MySQL database
$host = "localhost";
$username = "root";
$password = "";
$dbname = "chat";

$conn = mysqli_connect($host, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$message = $_POST['message'];

$sql = "INSERT INTO messages (UserID, UserName, Text) VALUES (1,'Anome' , '$message')";
if (mysqli_query($conn, $sql)) {
    echo "Message sent successfully.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

header("Location: chatbox_ui.php");
exit();
?>
