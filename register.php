<?php

session_start();
include 'nav.php';
?>
<html>
<head>
<title>Register</title>

   
<link rel=\"stylesheet\" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

<style type="text/css">
    
    #registerForm {
        margin-top: 10%;
        margin-left: 25%;
    }

    input{
        margin-top:15px;
    }

    span {
        padding-left: 5px;
        width: 100px;
    }

</style>
</head>
<body>


    <form id="registerForm"action="registerSubmit.php" method="POST">
    
    <table>
        <tr>
            <td>
                <input type="text" name="fname" placeholder="First name" autofocus required>
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" name="lname" placeholder="Last name" required>
            </td>  
        </tr>
        <tr>
            <td>
                <input type="email" name="username" id="user_email" placeholder="Username(email)" onkeypress="EmailCheck();" required >
            </td>
            <td>
                <span id = "email_status"> </span>
            </td> 
        </tr>
        <tr>
            <td>
                <input type="password" name="password" placeholder="Password" required><br>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="Submit">
                <input type="button" value="Clear" onclick="clearForm()">
            </td>
        </tr>
    </table>
    </form>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript">

function EmailCheck(){

    $('#user_email').keyup(function() {
    var username = $(this).val();

    $('#email_status').text('Checking database...');

    if(username != ''){
        $.post('checkemail.php',{ username: username }, function(data) {
            $('#email_status').text(data);
        });
    } else {
        $('#email_status').text('');
    }

    });
}

function clearForm(){
    document.getElementById('registerForm').reset();

}
</script>

</body>

</html>


