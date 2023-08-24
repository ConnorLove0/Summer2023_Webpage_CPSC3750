<?php
$servername = "localhost";
$username = "calove"; // Replace with your MySQL username
$password = "VXvsjr71!"; // Replace with your MySQL password
$dbname = "record_company";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the "bands" table
$sql = "SELECT DISTINCT bands.name AS 'Band Name'
        FROM bands
        JOIN albums ON bands.id = albums.band_id;";

$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Record Company - Bands</title>
</head>
<body>
    <h1>Record Company - Bands with Albums</h1>

    <?php
    if ($result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr><th>Band Name</th></tr>";

        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>". $row["Band Name"] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No bands found in the database.";
    }

    // Close the connection
    $conn->close();
    ?>
</body>
</html>