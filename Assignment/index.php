<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "students";

$conn = mysqli_connect("localhost","root","","students");

if(isset($_POST['submit'])){
  if($_POST['name'] && $_POST['email'] && $_POST['phone'] && $_POST['dob'] && $_POST['gender'] && $_POST['address'] && $_POST['course']){
    $sqlworkbench = "INSERT INTO student(name,email,phone,dob,gender,address,course);
            VALUES ('$_POST[name]','$_POST[email]','$_POST[phone]','$_POST[dob]','$_POST[gender]','$_POST[address]','$_POST[course]')";
    mysqli_query($conn,$sqlworkbench);
    header("Location: info.php");
  } else {
    echo "<script>alert('Need all information please!');</script>";
  }
}
?>
<form method="post">
  Name <input type="text" name="name"><br>
  Email <input type="email" name="email"><br>
  Phone <input type="text" name="phone"><br>
  DOB <input type="date" name="dob"><br>
  Gender <select name="gender"><option value="">--Select--</option><option>Male</option><option>Female</option></select><br>
  Address <input type="text" name="address"><br>
  Course <input type="text" name="course"><br>
  <button type="submit" name="submit">Submit</button>
</form>