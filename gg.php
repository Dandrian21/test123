<!DOCTYPE html>
<html>
<head>
</head>
<body>
<div>
<?php

// PHP program to obtain IP address of
// the server

// Creating a variable to store the
// server address
$localIP = getHostbyName(getHostName());
  
// Displaying the address 
echo "Server IP Address is: $ip_server";

?>
</div>
</body>
</html>