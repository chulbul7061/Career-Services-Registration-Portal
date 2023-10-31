<?php
include_once("databasefile.php");

// Establish a database connection and execute the query
$mysqli = new mysqli($servername,$username, $password, $databasename);
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$query = "SELECT * FROM careerform";
$result = $mysqli->query($query);

if (!$result) {
    die("Query failed: " . $mysqli->error);
}
?>

<html>
<head>
<link rel="stylesheet" href="style3.css">

    <title>Homepage</title>
</head>
<body>
<a href="index.html">Add New User</a><br/><br/>

<table width='80%' border='1'>
    <tr>
        <th>Select Program</th>
        <th>Registration Number</th>
        <th>Date of Birth</th>
        <th>Gender</th>
        <th>Nationality</th>
        <th>Mobile</th>
        <th>Email</th>
        <th>Father's Name</th>
        <th>Mother's Name</th>
        <th>Father's Occupation</th>
        <th>Mother's Occupation</th>
        <th>Category</th>
        <th>Program</th>
        <th>Start Batch</th>
        <th>Passing Batch</th>
        <th>Board (10th)</th>
        <th>Year (10th)</th>
        <th>CGPA (10th)</th>
        <th>Board (12th)</th>
        <th>Year (12th)</th>
        <th>CGPA (12th)</th>
        <th>Board (Diploma)</th>
        <th>Year (Diploma)</th>
        <th>CGPA (Diploma)</th>
        <th>Board (Graduation)</th>
        <th>Year (Graduation)</th>
        <th>CGPA (Graduation)</th>
        <th>Board (Post Graduation)</th>
        <th>Year (Post Graduation)</th>
        <th>CGPA (Post Graduation)</th>
        <th>Address 1</th>
        <th>Address 2</th>
        <th>Language 1</th>
        <th>Language 2</th>
        <th>Language 3</th>
        <th>Language 4</th>
        <th>Work Experience</th>
        <th>LinkedIn</th>
        <th>ID Proof</th>
        <th>CV</th>
        <th>Update</th>
    </tr>

    <?php
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row['selectprogram'] . '</td>';
        echo '<td>' . $row['regno'] . '</td>';
        echo '<td>' . $row['dob'] . '</td>';
        echo '<td>' . $row['gender'] . '</td>';
        echo '<td>' . $row['nationality'] . '</td>';
        echo '<td>' . $row['mobile'] . '</td>';
        echo '<td>' . $row['email'] . '</td>';
        echo '<td>' . $row['fathername'] . '</td>';
        echo '<td>' . $row['mothername'] . '</td>';
        echo '<td>' . $row['fatheroccupation'] . '</td>';
        echo '<td>' . $row['motheroccupation'] . '</td>';
        echo '<td>' . $row['category'] . '</td>';
        echo '<td>' . $row['program'] . '</td>';
        echo '<td>' . $row['startbatch'] . '</td>';
        echo '<td>' . $row['passingbatch'] . '</td>';
        echo '<td>' . $row['board_10th'] . '</td>';
        echo '<td>' . $row['year_10th'] . '</td>';
        echo '<td>' . $row['cgpa_10th'] . '</td>';
        echo '<td>' . $row['boad_2'] . '</td>';
        echo '<td>' . $row['year_2'] . '</td>';
        echo '<td>' . $row['CGPA_2'] . '</td>';
        echo '<td>' . $row['board_diploma'] . '</td>';
        echo '<td>' . $row['year_diploma'] . '</td>';
        echo '<td>' . $row['cgpa_diploma'] . '</td>';
        echo '<td>' . $row['board_gra'] . '</td>';
        echo '<td>' . $row['year_gra'] . '</td>';
        echo '<td>' . $row['cgpa_gra'] . '</td>';
        echo '<td>' . $row['board_postgra'] . '</td>';
        echo '<td>' . $row['year_postgra'] . '</td>';
        echo '<td>' . $row['cgpa_postgra'] . '</td>';
        echo '<td>' . $row['address1'] . '</td>';
        echo '<td>' . $row['address2'] . '</td>';
        echo '<td>' . $row['Language1'] . '</td>';
        echo '<td>' . $row['Language2'] . '</td>';
        echo '<td>' . $row['Language3'] . '</td>';
        echo '<td>' . $row['Language4'] . '</td>';
        echo '<td>' . $row['workexperiance'] . '</td>';
        echo '<td>' . $row['linkedin'] . '</td>';
        echo '<td>' . $row['idproof'] . '</td>';
        echo '<td>' . $row['cv'] . '</td>';
        echo "<td><a href='editdata.php?id=$row[id]'>Edit</a> | <a href='deletedata.php?id=$row[id]'>Delete</a></td></tr>";

        echo '</tr>';
    }
    ?>
</table>
</body>
</html>
