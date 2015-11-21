<?php

session_start();
include 'nav.php';
?>
<html>
<head>
<title>Register</title>

   
<link rel=\"stylesheet\" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

</head>
<body>



<center>
    <form action="registerSubmit.php" method="POST" id="form">
    
    First name:<br>
    <input type="text" name="fname" autofocus required style='margin-top:5px'><br>

    Last name:<br>

    <input type="text" name="lname" required style='margin-top:5px'><br>

    Username(email):<br>

    <input type="email" name="username" required style='margin-top:5px'><br>


    Password:<br>

    <input type="password" name="password" required style='margin-top:5px'><br>

    <input type="submit" value="Submit" style='margin-top:15px'>

    </form>
</center>

</body>

</html>


