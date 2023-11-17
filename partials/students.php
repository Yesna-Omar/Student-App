<?php
// querying the tables to return information about the student and the course that they are enrolled on
 $students = $conn->prepare('SELECT 
 s.student_id,
 s.student_name,
 s.dob,
 s.address,
 s.tel
 FROM student s;
');
$students->execute();
$students->store_result();
$students->bind_result($studentId, $studentName, $dob, $address, $tel);
?>
<table class="table">

  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">DOB</th>
      <th scope="col">Address</th>
      <th scope="col">Telephone</th>
      <th scope="col">Actions</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <?php while ($students->fetch()): ?>
    <tr>
      <td><?= $studentId ?></td>
      <td><?= $studentName ?></td>
      <td><?= $dob ?></td>
      <td><?= $address ?></td>
      <td><?= $tel ?></td>
      <td onclick="window.location.href='editStudent.php?sid=<?= $studentId ?>'"><i class="fa-solid fa-pen-to-square"></i><td>
    </tr>
    <?php endwhile ?>
  </tbody>
</table>

