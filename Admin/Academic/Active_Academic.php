<?php
session_start();

if (isset($_SESSION['username']) && isset($_SESSION['user_type'])) {

 ?>

<!DOCTYPE html>
<?php include('../../include/conn.php');?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin</title>
    <link rel="stylesheet" href="Active_Academic.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  </head>
  <?php 
$rs=mysqli_query($conn,"select * from academic");
$row=mysqli_fetch_array($rs);
?>
  <body>

    <div class="sidebar">
      <header>Welcome</header>
      <a href="../index.php" >
        <i class=""></i>
        <span>Dashboard</span>
      </a>
      <a href="../Student/Add_Student.php" >
        <i class=""></i>
        <span>Student</span>
      </a>
      <a href="../Teacher/Add_Teacher.php">
        <i class=""></i>
        <span>Teacher</span>
      </a>
      <a href="../Courses/Edit_Courses.php">
         <i class=""></i>
        <span>Course</span>
      </a>
      <a href="../Section/Add_Section.php" >
        <i class=""></i>
        <span>Sections</span>
      </a>
      <a href="../Payment/Add_Payment.php" >
        <i class=""></i>
        <span>Payment</span>
      </a>
      <a href="../Academic/Active_Academic.php"  class="active"  >
        <i class=""></i>
        <span>Academic</span>
      </a>
      <a href="../Grade/Grade.php" >
        <i class=""></i>
        <span>Grade</span>
      </a>
      <a href="../../include/logout.php" >
        <i class=""></i>
        <span>Logout</span>
      </a>

    </div>

    <div class="cms">
      <p style="margin-left:25%">College Management System</p>
    </div>


<div class="navbar" style="margin-left:auto; margin-top:0%;">
 <div class="topnav">
   <a href="Active_Academic.php" class="active" >ACTIVE   SCHEDULES</a>
   <a href="Edit_Academic.php" >EDIT  SCHEDULES</a>
</div>
</div>

<div class="main">
<table  style="border:3px solid black;border-collapse:collapse; margin-left:40%; margin-top:20px">
  <tr>
    <td colspan="5" align=center>
      <h1>First Year</h1>
      <h3>Section: A</h2>
    </td>
  </tr>
  <tr>
    <td style="border:1px solid green;padding: 10px;"> <h3>Day</h3> </td>
    <td style="border:1px solid green;padding: 10px;"> <h3> Year</h3></td>
    <td style="border:1px solid green;padding: 10px;"> <h3> section</h3> </td>
    <td style="border:1px solid green;padding: 10px;"> <h3> time</h3> </td>
    <td style="border:1px solid green;padding: 10px;"> <h3> Subject</h3></td>

  </tr>
  <?php 
  while ($row = mysqli_fetch_array($rs)) {
?>
  <tr>
    <td style="border:1px solid green; padding: 10px;"><?php echo $row['day'] ; ?></td>
    <td style="border:1px solid green;padding: 10px;"><?php echo $row['year'] ; ?></td>
    <td style="border:1px solid green;padding: 10px;"><?php echo $row['section'] ; ?> </td>
    <td style="border:1px solid green;padding: 10px;"><?php echo $row['time'] ; ?></td>
    <td style="border:1px solid green;padding: 10px;"><?php echo $row['subject'] ; ?></td>
  </tr>
  <?php
      }
     ?>
  </table>
</div>



</body>
</html>

<?php
}else {
  header("Location: ../../index.php");
  exit();
}
 ?>
