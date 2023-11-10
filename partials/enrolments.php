<?php
// querying the tables to return information about the student and the course that they are enrolled on
 $students = $conn->prepare('SELECT 
 s.student_id,
 s.student_name,
 s.dob,
 e.enrolment_id,
 e.enrolment_date,
 c.course_id,
 c.course_name
FROM enrolment e
INNER JOIN student s ON e.fk_student = s.student_id
INNER JOIN course c ON e.fk_course = c.course_id;
');
$students->execute();
$students->store_result();
$students->bind_result($studentId, $studentName, $dob, $enrolId, $enrolDate, $courseId, $course);
?>
<table class="table">

  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">DOB</th>
      <th scope="col">Enrol Id</th>
      <th scope="col">Enrolled On</th>
      <th scope="col">Course Name</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  <?php while ($students->fetch()): ?>
    <tr>
      <td><?= $studentId ?></td>
      <td><?= $studentName ?></td>
      <td><?= $dob ?></td>
      <td><?= $enrolId ?></td>
      <td><?= $enrolDate ?></td>
      <td><?= $course ?></td>
      <td onclick="window.location.href='queries/delete_enrolment.php?eid=<?= $enrolId ?>'"><i class="fa-solid fa-trash"></i></td>
    </tr>
    <?php endwhile ?>
  </tbody>
</table>

