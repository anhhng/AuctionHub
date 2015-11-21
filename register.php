<?php

session_start();
include 'nav.php';

	

	//$var_value = $_SESSION['email_error'];

	//$var_value = $_SESSION['username_error'];

    echo "<html>";
	echo "<head>";
	echo "<title>Register</title>";

   // echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"css/style.css\">";

    echo "<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\" integrity=\"sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==\" crossorigin=\"anonymous\">";



	echo "</head>";
	echo "<body>";

	

	/*
	if($var_value == -1)
	{
		echo "<p>email exists!</p><br>";
	}

	if($var_values == -2)
	{
		echo "<p>username exists!</p><br>";
	}
	*/

    echo "<center><form action=\"registerSubmit.php\" method=\"POST\" id=\"form\">";

	echo "First name:<br>";

	echo "<input type=\"text\" name=\"fname\" required style='margin-top:5px'><br>";

  	echo "Last name:<br>";

	echo "<input type=\"text\" name=\"lname\" required style='margin-top:5px'><br>";

	echo "Username(email):<br>";

	echo "<input type=\"text\" name=\"username\" required style='margin-top:5px'><br>";


	echo "Password:<br>";

	echo "<input type=\"password\" name=\"password\" required style='margin-top:5px'><br>";

  	echo "<input type=\"submit\" value=\"Submit\" style='margin-top:15px'>";

	echo "</form></center>";

	echo "</body>";

	echo "</html>";

?>

