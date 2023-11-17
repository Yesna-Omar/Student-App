<?php
    include '../config/dbConfig.php';
    $addStudent = $conn->prepare("INSERT INTO
     `student`
     ( `student_name`,`address`, `dob`, `tel`)
      VALUES (?,?,?,?)
    ");
    $addStudent->bind_param('ssss', $_POST['student_name'], $_POST['address'], $_POST['dob'], $_POST['tel'] );

    $addStudent->execute();
    
    header("Location: ../allStudents.php");

