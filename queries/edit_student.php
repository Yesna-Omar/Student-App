<?php
    $studentId = $_GET['sid'];
    include '../config/dbConfig.php';
    $editStudent = $conn->prepare("UPDATE
     `student` 
     SET `student_name`= ?,
     `address`= ?,
     `dob`= ?,
     `tel`= ?
     WHERE student_id = $studentId
    ");
    $editStudent->bind_param('ssss', $_POST['student_name'], $_POST['address'], $_POST['dob'], $_POST['tel'] );

    $editStudent->execute();
    
    header("Location: ../allStudents.php");

   