<?php
include("databasefile.php");
session_start();

//Form submit working
if (isset($_POST['submit'])) {
    extract($_POST);

    
    $sql = "INSERT INTO careerform (selectprogram,regno,dob,gender,nationality,mobile,email,fathername,mothername,fatheroccupation,motheroccupation,category,program,startbatch,passingbatch,board_10th,year_10th,cgpa_10th,boad_2,year_2,CGPA_2,board_diploma,year_diploma,cgpa_diploma,board_gra,year_gra,cgpa_gra,board_postgra,year_postgra,cgpa_postgra,address1,address2,Language1,Language2,Language3,Language4,workexperiance,linkedin,idproof,cv) 
    
    
    VALUES ('$selectprogram', '$regno','$dob','$gender','$nationality','$mobile','$email','$fathername','$mothername','$fatheroccupation','$motheroccupation','$category','$program','$startbatch','$passingbatch','$board_10th','$year_10th','$cgpa_10th','$boad_2','$year_2','$CGPA_2','$board_diploma','$year_diploma','$cgpa_diploma','$board_gra','$year_gra','$cgpa_gra','$board_postgra','$year_postgra','$cgpa_postgra','$address1','$address2','$Language1','$Language2','$Language3','$Language4','$workexperiance','$linkedin','$idproof','$cv')";

    $result = $conn->query($sql);
    if ($result) {
        $_SESSION['success'] = "User has been created";
    } else {
        $_SESSION['error'] = "Something went wrong, please try again";
    }
    
    header("LOCATION: msg.html");
    // echo 
}
?>