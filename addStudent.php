<?php
    include 'partials/header.php';
?>
<div class="d-flex justify-content-center mt-5">
    <div class="col-8">
        <form action="queries/add_student.php" method="post">
            <div class="row">
                <div class="col form-group">
                    <label>Students full name</label>
                    <input type="text" class="form-control" placeholder="" name="student_name">
                </div>
                <div class="col">
                    <label>Address</label>
                    <input type="text" class="form-control" placeholder="" name="address">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <label>Date of Birth</label>
                    <input type="date" class="form-control" name="dob">
                </div>
                <div class="col">
                    <label>Contact number</label>
                    <input type="text" class="form-control" placeholder="" name="tel">
                </div>
            </div>
            <div class="row mt-3">
                <button type="submit" class="btn btn-primary">Add Student</button>
            </div>         
        </form>
    </div>
</div>