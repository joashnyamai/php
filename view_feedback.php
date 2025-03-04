<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "0745";
$dbname = "campaign_feedback";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the database
$sql = "SELECT * FROM feedback";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Feedback</th>
                <th>Rating</th>
                <th>Submission Date</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['id'] . "</td>
                <td>" . $row['name'] . "</td>
                <td>" . $row['email'] . "</td>
                <td>" . $row['feedback'] . "</td>
                <td>" . $row['rating'] . "</td>
                <td>" . $row['submission_date'] . "</td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "No feedback found.";
}

$conn->close();
?>