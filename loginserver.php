<?php
	session_start();
    //////////////////////////////////////////////////////////////
   
    ///////////////////////////////////////////////////////
$link = mysqli_connect("localhost", "root", "", "delhi");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}






if(isset($_POST['submission'])){

// Escape special characters in a string
    $logemail = mysqli_real_escape_string($link, $_POST['logemail']);
    $logpassword = mysqli_real_escape_string($link, $_POST['logpassword']);

// If username and password are not empty
    if ($logemail != "" && $logpassword != ""){

    // Query database to find user with matching username and password
        $query = "select count(*) as cntUser from userregistration where regemail='".$logemail."' and regpassword='".$logpassword."'";

    // Store query result
        $result = mysqli_query($link, $query);

    // Fetch row as associative array
        $row = mysqli_fetch_array($result);

    // Get number of rows
        $count = $row['cntUser'];

    // If number of row is more than zero
        if($count > 0){

        // Set matched user as current user
        $_SESSION['is_login']=true;
                $_SESSION['lemail'] = $logemail;
              

        // Display success message
        echo "<script> location.href='index.php' </script>";

    // Else if number of row is less than zero
        } else {
        
        // Display failed message
                echo "Error! Invalid username and password.";
        } 

    } 
    }
  

?>

