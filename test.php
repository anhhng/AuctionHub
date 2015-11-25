<html>
    <head>
       <!--<meta http-equiv="refresh" content="3; URL='index.php'" /> -->
    </head>
    <body>
        <h1>
            Logged in
        </h1>
    </body>
</html>
<script>
    function startTimer(duration, display) {
        var timer = duration, minutes, seconds;
        var end =setInterval(function () {
            seconds = parseInt(timer % 60, 10);
            seconds = seconds < 10 ? "0" + seconds : seconds;

            display.textContent = seconds;

            if (--timer < 0) {
                window.location = "index.php";
                clearInterval(end);
            }
        }, 1000);
    }

    window.onload = function () {
        var threeSeconds = 2,
            display = document.querySelector('#time');
        startTimer(threeSeconds, display);
    };
</script>
</head>
<body>
    <div><h1>Redirecting in <span id="time">03</span></h1>
        <h2> Or <a href = "index.php">CLICK HERE</a> to go to the page directly.</h2>
    </div>
    
<form id="form1" runat="server">

</form>