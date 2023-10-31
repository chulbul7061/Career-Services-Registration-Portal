<?php
include("databasefile.php");

if (isset($_GET['id'])) {
    $sql = "SELECT * FROM careerform WHERE id = " . $_GET['id'];
    $result = $conn->query($sql);
    $user = mysqli_fetch_assoc($result);
} else {
    echo "<h1>Invalid request</h1>";
    exit;
}

if (isset($_POST['submit'])) {
    extract($_POST);

    $sql = "UPDATE careerform SET 
        selectprogram = '$selectprogram',
        regno = '$regno',
        dob = '$dob',
        gender = '$gender',
        nationality = '$nationality',
        mobile = '$mobile',
        email = '$email',
        fathername = '$fathername',
        mothername = '$mothername',
        fatheroccupation = '$fatheroccupation',
        motheroccupation = '$motheroccupation',
        category = '$category',
        program = '$program',
        startbatch = '$startbatch',
        passingbatch = '$passingbatch',
        board_10th = '$board_10th',
        year_10th = '$year_10th',
        cgpa_10th = '$cgpa_10th',
        boad_2 = '$boad_2',
        year_2 = '$year_2',
        CGPA_2 = '$CGPA_2',
        board_diploma = '$board_diploma',
        year_diploma = '$year_diploma',
        cgpa_diploma = '$cgpa_diploma',
        board_gra = '$board_gra',
        year_gra = '$year_gra',
        cgpa_gra = '$cgpa_gra',
        board_postgra = '$board_postgra',
        year_postgra = '$year_postgra',
        cgpa_postgra = '$cgpa_postgra',
        address1 = '$address1',
        address2 = '$address2',
        Language1 = '$Language1',
        Language2 = '$Language2',
        Language3 = '$Language3',
        Language4 = '$Language4',
        workexperiance = '$workexperiance',
        linkedin = '$linkedin',
        idproof = '$idproof',
        cv = '$cv'
        WHERE id = " . $_GET['id'];

    $result = $conn->query($sql);
    if ($result) {
        $_SESSION['success'] = "User data has been updated";
    } else {
        $_SESSION['error'] = "Something went wrong, please try again";
    }
    header("LOCATION: fetchalldata.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style2.css" rel="stylesheet">
    <title>Edit User Data</title>
</head>

<body>
    <section class="section">
        <h2>Edit User Data</h2>

        <form action="editdata.php?id=<?php echo $user['id'] ?>" method="post">
            <div class="container">
                <!-- Input fields for all columns -->
                <label for="selectprogram"><b>Select Program</b></label>
                <input type="text" name="selectprogram" value="<?php echo $user['selectprogram']; ?>" required>

                <label for="regno"><b>Registration Number</b></label>
                <input type="text" name="regno" value="<?php echo $user['regno']; ?>" required>

                <label for="dob"><b>Date of Birth</b></label>
                <input type="text" name="dob" value="<?php echo $user['dob']; ?>" required>

                <label for="gender"><b>Gender</b></label>
                <input type="text" name="gender" value="<?php echo $user['gender']; ?>" required>

                <label for="nationality"><b>Nationality</b></label>
                <input type="text" name="nationality" value="<?php echo $user['nationality']; ?>" required>

                <label for="mobile"><b>Mobile</b></label>
                <input type="text" name="mobile" value="<?php echo $user['mobile']; ?>" required>

                <label for="email"><b>Email</b></label>
                <input type="text" name="email" value="<?php echo $user['email']; ?>" required>

                <label for="fathername"><b>Father's Name</b></label>
                <input type="text" name="fathername" value="<?php echo $user['fathername']; ?>" required>

                <label for="mothername"><b>Mother's Name</b></label>
                <input type="text" name="mothername" value="<?php echo $user['mothername']; ?>" required>

                <label for="fatheroccupation"><b>Father's Occupation</b></label>
                <input type="text" name="fatheroccupation" value="<?php echo $user['fatheroccupation']; ?>" required>

                <label for="motheroccupation"><b>Mother's Occupation</b></label>
                <input type="text" name="motheroccupation" value="<?php echo $user['motheroccupation']; ?>" required>

                <label for="category"><b>Category</b></label>
                <input type="text" name="category" value="<?php echo $user['category']; ?>" required>

                <label for="program"><b>Program</b></label>
                <input type="text" name="program" value="<?php echo $user['program']; ?>" required>

                <label for="startbatch"><b>Start Batch</b></label>
                <input type="text" name="startbatch" value="<?php echo $user['startbatch']; ?>" required>

                <label for="passingbatch"><b>Passing Batch</b></label>
                <input type="text" name="passingbatch" value="<?php echo $user['passingbatch']; ?>" required>

                <label for="board_10th"><b>Board (10th)</b></label>
                <input type="text" name="board_10th" value="<?php echo $user['board_10th']; ?>" required>

                <label for="year_10th"><b>Year (10th)</b></label>
                <input type="text" name="year_10th" value="<?php echo $user['year_10th']; ?>" required>

                <label for="cgpa_10th"><b>CGPA (10th)</b></label>
                <input type="text" name="cgpa_10th" value="<?php echo $user['cgpa_10th']; ?>" required>

                <label for="boad_2"><b>Board (12th)</b></label>
                <input type="text" name="boad_2" value="<?php echo $user['boad_2']; ?>" required>

                <label for="year_2"><b>Year (12th)</b></label>
                <input type="text" name="year_2" value="<?php echo $user['year_2']; ?>" required>

                <label for="CGPA_2"><b>CGPA (12th)</b></label>
                <input type="text" name="CGPA_2" value="<?php echo $user['CGPA_2']; ?>" required>

                <label for="board_diploma"><b>Board (Diploma)</b></label>
                <input type="text" name="board_diploma" value="<?php echo $user['board_diploma']; ?>" required>

                <label for="year_diploma"><b>Year (Diploma)</b></label>
                <input type="text" name="year_diploma" value="<?php echo $user['year_diploma']; ?>" required>

                <label for="cgpa_diploma"><b>CGPA (Diploma)</b></label>
                <input type="text" name="cgpa_diploma" value="<?php echo $user['cgpa_diploma']; ?>" required>

                <label for="board_gra"><b>Board (Graduation)</b></label>
                <input type="text" name="board_gra" value="<?php echo $user['board_gra']; ?>" required>

                <label for="year_gra"><b>Year (Graduation)</b></label>
                <input type="text" name="year_gra" value="<?php echo $user['year_gra']; ?>" required>

                <label for="cgpa_gra"><b>CGPA (Graduation)</b></label>
                <input type="text" name="cgpa_gra" value="<?php echo $user['cgpa_gra']; ?>" required>

                <label for="board_postgra"><b>Board (Post Graduation)</b></label>
                <input type="text" name="board_postgra" value="<?php echo $user['board_postgra']; ?>" required>

                <label for="year_postgra"><b>Year (Post Graduation)</b></label>
                <input type="text" name="year_postgra" value="<?php echo $user['year_postgra']; ?>" required>

                <label for="cgpa_postgra"><b>CGPA (Post Graduation)</b></label>
                <input type="text" name="cgpa_postgra" value="<?php echo $user['cgpa_postgra']; ?>" required>

                <label for="address1"><b>Address 1</b></label>
                <input type="text" name="address1" value="<?php echo $user['address1']; ?>" required>

                <label for="address2"><b>Address 2</b></label>
                <input type="text" name="address2" value="<?php echo $user['address2']; ?>" required>

                <label for="Language1"><b>Language 1</b></label>
                <input type="text" name="Language1" value="<?php echo $user['Language1']; ?>" required>

                <label for="Language2"><b>Language 2</b></label>
                <input type="text" name="Language2" value="<?php echo $user['Language2']; ?>" required>

                <label for="Language3"><b>Language 3</b></label>
                <input type="text" name="Language3" value="<?php echo $user['Language3']; ?>" required>

                <label for="Language4"><b>Language 4</b></label>
                <input type="text" name="Language4" value="<?php echo $user['Language4']; ?>" required>

                <label for="workexperiance"><b>Work Experience</b></label>
                <input type="text" name="workexperiance" value="<?php echo $user['workexperiance']; ?>" required>

                <label for="linkedin"><b>LinkedIn</b></label>
                <input type="text" name="linkedin" value="<?php echo $user['linkedin']; ?>" required>

                <label for="idproof"><b>ID Proof</b></label>
                <input type="text" name="idproof" value="<?php echo $user['idproof']; ?>" required>

                <label for="cv"><b>CV</b></label>
                <input type="text" name="cv" value="<?php echo $user['cv']; ?>" required>

                <button type="submit" name="submit">Update</button>
            </div>
        </form>

        <div class="container" style="background-color:#f1f1f1">
            <a href="fetchalldata.php" class="footerbtn">All Users</a>
        </div>
    </section>
</body>

</html>
