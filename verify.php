<?php
    $servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "oes";

	// Create connection
	$conn = new mysqli($servername, $username, $password);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash'])){
    // Verify data
    $email =$_GET['email']; // Set email variable
    $hash = $_GET['hash']; // Set hash variable
                 
    $search = mysqli_query($conn,"SELECT email, hash, active FROM oes.user WHERE email='".$email."' AND hash='".$hash."' AND active='0'") or die(mysql_error()); 
    $match  = mysqli_num_rows($search);
                 
    if($match > 0){
        // We have a match, activate the account
        mysqli_query($conn,"UPDATE oes.user SET active='1' WHERE email='".$email."' AND hash='".$hash."' AND active='0'") or die(mysql_error());
        echo '<div class="statusmsg">Your account has been activated, you can now login</div>';
    }else{
        // No match -> invalid url or account has already been activated.
        echo 'The url is either invalid or you already have activated your account.';
    }
                 
}else{
    // Invalid approach
    echo 'Invalid approach, please use the link that has been send to your email.';
}
?>