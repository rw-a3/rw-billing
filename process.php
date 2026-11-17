<?php
 session_start();
 

include 'db.php';    
  
 $login = mysqli_query($conn,"SELECT * FROM user WHERE username = '" .$_POST['username'] . "' and password = '" .$_POST['password'] . "'");
 $row=mysqli_fetch_array($login);  
 
 if($row){
 $_SESSION['id'] = $row['id'];
 // update the last login time of the user
 $update = mysqli_query($conn,"UPDATE user SET last_login = NOW() WHERE username = '" .$_POST['username'] . "'");

 echo '<script>windows: location="billing.php"</script>';
 }
	else {
		header ("location: index.php?err");
		}
 
 
?>
