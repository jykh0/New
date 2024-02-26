<html>
<head>
    <title>Portfolio</title>
</head>
<body>
<center><h1>Portfolio</h1>
<?php
include 'dbcon.php';


$result = $conn->query("SELECT * FROM personal_info");

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<p>Name: " . $row['full_name'] . "<br>Age: " . $row['age'] . "<br>Email: " . $row['email'] . 
	"<br>Phone: " . $row['phone_number'] . "<br>Education: " . $row['education'] . "<br>Skills: " . $row['skills'] . 
	"<br>Projects: " . $row['projects'] . "<br>Certifications: " . $row['certifications'] . "</p>";
    }
} else {
    echo "No data found";
}

$conn->close();
?>

</center></body>
</html>
