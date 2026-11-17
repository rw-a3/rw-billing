<?php
$conn = mysqli_connect('db', 'billing_user', 'billing_pass',"waterbilling");
	 if (!$conn)
    {
	 die('Could not connect: ' . mysql_error());
	} 
	

