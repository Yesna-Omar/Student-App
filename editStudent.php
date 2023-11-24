<?php
$studentId = $_GET['sid'];
include 'config/dbConfig.php';
// querying the tables to return information about the student and the course that they are enrolled on
 $students = $conn->prepare("SELECT
    student_name,
    address,
    dob,
    tel
    FROM student
    WHERE student_id = $studentId
");
$students->execute();
$students->store_result();
$students->bind_result($studentName, $dob, $address, $tel);
$students->fetch();
include 'partials/header.php';
?>
<div class="d-flex justify-content-center mt-5">
    <div class="col-8">
        <form action="queries/edit_student.php?sid=<?= $studentId ?>" method="post">
            <div class="row">
                <div class="col form-group">
                    <label>Students full name</label>
                    <input type="text" class="form-control" placeholder="" name="student_name" value="<?= $studentName ?>">
                </div>
                <div class="col">
                    <label>Address</label>
                    <input type="text" class="form-control" placeholder="" name="address" value="<?= $address ?>">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <label>Date of Birth</label>
                    <input type="date" class="form-control" name="dob" value="<?= $dob ?>">
                </div>
                <div class="col">
                    <label>Contact number</label>
                    <input type="text" class="form-control" placeholder="" name="tel" value="<?= $tel ?>">
                </div>
            </div>
            <div class="row mt-3">
                <button type="submit" class="btn btn-primary">Update Student</button>
            </div>         
        </form>
    </div>
</div>