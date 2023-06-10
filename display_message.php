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

// Fetch the chat messages from the database
$sql = "SELECT * FROM messages ORDER BY SystemDate DESC";
$result = mysqli_query($conn, $sql);

// Display the chat messages
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<p><strong>" . $row['UserName'] . "</strong>: " . $row['Text'] . "</p>";
    }
} else {
    echo "No messages yet.";
}

// Close the database connection
mysqli_close($conn);
?>
