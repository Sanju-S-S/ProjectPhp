<!DOCTYPE html>
<html>
<head>
  <title>Display all records from Database</title>
</head>
<body>

<h2>Day to Day Balances</h2>

<table border="2">
  <tr>
    <td>Name</td>
    <td>Password</td>
    <td>Email</td>
    <td>Phone No.</td>
  </tr>

<?php

include "connection.php";

$records = mysqli_query($con,"select * from userdb"); 

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['names']; ?></td>
    <td><?php echo $data['passwords']; ?></td>
    <td><?php echo $data['email']; ?></td>    
    <td><?php echo $data['phone']; ?></td>    
    <td><a href="edit.php?id=<?php echo $data['email']; ?>">Edit</a></td>
    <td><a href="delete.php?id=<?php echo $data['email']; ?>">Delete</a></td>
  </tr>	
<?php
}
?>
</table>

</body>
</html>