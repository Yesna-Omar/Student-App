<?php 
$enrolId = $_GET['eid'];

include '../config/dbConfig.php';

$deleteEnrolment = $conn->prepare("DELETE FROM  enrolment WHERE enrolment_id = $enrolId;");

$deleteEnrolment->execute();

header('Location: ../index.php');