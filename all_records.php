<!DOCTYPE html>
<html>
<head>
  <title>Admin Portal</title>
</head>
<body>

<center>
    <h1>Welcome Admin</h1>
    <h2>User Given Credentials</h2>

<table border="2">
  <tr>
    <td>Register Number</td>
    <td>Name</td>
    <td>Date of Birth</td>
    <td>Email</td>
    <td>Address</td>
    <td>Phone No.</td>
  </tr>

<?php

include "connection.php"; 

$records = mysqli_query($con,"select * from registration"); 

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['registerno']; ?></td>
    <td><?php echo $data['names']; ?></td>
    <td><?php echo $data['dob']; ?></td>    
    <td><?php echo $data['email']; ?></td>
    <td><?php echo $data['peraddress']; ?></td>    
    <td><?php echo $data['phone']; ?></td>    
    <td><a href="edit.php?id=<?php echo $data['email']; ?>">Edit</a></td>
    <td><a href="delete.php?id=<?php echo $data['email']; ?>">Delete</a></td>
  </tr>	
<?php
}
?>
</table>
</center>

</body>
</html>