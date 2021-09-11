<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no logpassword$logpassword) */
$link = mysqli_connect("localhost", "root", "", "delhi");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$Rusername = mysqli_real_escape_string($link, $_REQUEST['Rusername']);
$Remail = mysqli_real_escape_string($link, $_REQUEST['Remail']);
$Rpassword = mysqli_real_escape_string($link, $_REQUEST['Rpassword']);
 
// Attempt insert query execution
$sql = "INSERT INTO userregistration (regusername, regemail, regpassword) VALUES ('$Rusername', '$Remail', '$Rpassword')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
   






} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection



mysqli_close($link);
?>

