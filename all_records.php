<!DOCTYPE html>
<html>
<head>
  <title>All Records</title>
</head>
<body>

<center>
    <h1>Welcome Admin</h1>
    <h2>User Given Credentials</h2>

<table border="2">
  <tr>
    <td>Dater</td>
    <td>Opening Balance</td>
    <td>Xerox Copy</td>
    <td>Xerox Amount</td>
    <td>Fund Transfer Amount</td>
    <td>Fund Transfer Charges</td>
    <td>Printout Copies Nos</td>
    <td>Printout Amount</td>
    <td>No.of Astro</td>
    <td>Astro Amount</td>
    <td>Eb Bill and Online Payment Amount</td>
    <td>Eb Bill and Online Payment Charges</td>
    <td>No.of Scans</td>
    <td>Scan Amount</td>
    <td>No.of Color Printout</td>
    <td>Color Printout Amount</td>
    <td>No.of Lamination</td>
    <td>Lamination Amount</td>
    <td>No.of Spiral</td>
    <td>Spiral Amount</td>
    <td>Other Income 1</td>
    <td>Comments 1</td>
    <td>Other Income 2</td>
    <td>Comments 2</td>
    <td>Other Income 3</td>
    <td>Comments 3</td>
    <td>Other Income 4</td>
    <td>Comments 4</td>
    <td>Total Income</td>

  </tr>

<?php

include "connection.php"; 

$records = mysqli_query($con,"select * from dailydata"); 

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['dates']; ?></td>
    <td><?php echo $data['openingbalance']; ?></td>
    <td><?php echo $data['xeroxcopies']; ?></td>    
    <td><?php echo $data['xeroxamount']; ?></td>
    <td><?php echo $data['ftamount']; ?></td>    
    <td><?php echo $data['ftcharges']; ?></td>   
    <td><?php echo $data['printcopies']; ?></td>    
    <td><?php echo $data['printamount']; ?></td>
    <td><?php echo $data['astrocopies']; ?></td>    
    <td><?php echo $data['astroamount']; ?></td>
    <td><?php echo $data['billactualamount']; ?></td>    
    <td><?php echo $data['billcharges']; ?></td>
    <td><?php echo $data['scannos']; ?></td>    
    <td><?php echo $data['scanamount']; ?></td> 
    <td><?php echo $data['colorprintcopies']; ?></td>    
    <td><?php echo $data['colorprintamount']; ?></td>
    <td><?php echo $data['laminationnos']; ?></td>    
    <td><?php echo $data['laminationprice']; ?></td>
    <td><?php echo $data['spiralnos']; ?></td>    
    <td><?php echo $data['spiralamount']; ?></td>
    <td><?php echo $data['otheramount1']; ?></td>    
    <td><?php echo $data['comments1']; ?></td>
    <td><?php echo $data['otheramount2']; ?></td>    
    <td><?php echo $data['comments2']; ?></td>
    <td><?php echo $data['otheramount3']; ?></td>    
    <td><?php echo $data['comments3']; ?></td>
    <td><?php echo $data['otheramount4']; ?></td>    
    <td><?php echo $data['comments4']; ?></td>
    <td><?php echo $data['totvalue']; ?></td>
    <td><a href="edit_daily_entry.php?id=<?php echo $data['dates']; ?>">Edit</a></td>
    <td><a href="delete.php?id=<?php echo $data['dates']; ?>">Delete</a></td>
  </tr>	
<?php
}
?>
</table>
</center>

</body>
</html>