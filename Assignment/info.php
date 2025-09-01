<?php
$conn = mysqli_connect("localhost","root","","students");
$result = mysqli_query($conn,"SELECT * FROM student");
?>
<table border="1">
<tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>DOB</th><th>Gender</th><th>Address</th><th>Course</th></tr>
<?php while($row=mysqli_fetch_assoc($result)){ ?>
<tr>
  <td><?= $row['id'] ?></td>
  <td><?= $row['name'] ?></td>
  <td><?= $row['email'] ?></td>
  <td><?= $row['phone'] ?></td>
  <td><?= $row['dob'] ?></td>
  <td><?= $row['gender'] ?></td>
  <td><?= $row['address'] ?></td>
  <td><?= $row['course'] ?></td>
</tr>
<?php } ?>
</table>
<br>
<center><a href="index.php">Back</a></center>