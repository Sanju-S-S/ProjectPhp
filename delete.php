<?php
include "connection.php"; 
$date = $_GET['id']; 

$qry = mysqli_query($con,"delete from dailydata where dates='$date'"); 

if($qry)
{
    mysqli_close($con); 
    header("location:all_records.php"); 
    exit;	
}
else
{
    echo "Error deleting record"; 
}
?>