<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>GoBold.ly</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="icon" type="image/png" href="favicon.png">
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script type="text/javascript">
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-38349865-2', 'gobold.ly');
  ga('send', 'pageview');
</script>
<script>
    
    $(document).ready(function() {
        //Fades
        $("#title").hide();
        $("#title").fadeIn("slow");
        
        //Email
        
        $("#email_field").click(function() {
            if ($(this).val() == "Email Address") $(this).val("");
        });
        
        $("#email_submit").click(function() {
            var email = $("#email_field").val();
        	if ((email.length != 0) && (email.indexOf("@") !== -1)) {
            $.get('service/email.php', {email: email}, "json");
            $("#response").text("The email address "+email+" has been submitted.");
            $("#email_field").val("");
            }
            else $("#response").text("That email address is invalid. Please try again.")
        });
    });
</script>
</head>
<body>
    <div id="wrapper">
        <div id="container">
            <div id="logo"></div>
            <div id="headline">
	            <span>Connecting People.</span><br />
	            <span>Connecting Passions.</span><br />
	            <span id="highlight">Connecting Communities.</span>
            </div>
            <div id="subtext">
	            <span>Sign up now to receive updates and an invitation to our private beta.</span>
            </div>
            <div id="email_box">
                <input type="text" id="email_field" value="Email Address">
                <div id="email_submit"></div>
            </div>
            <div id="response"></div>
          </div>
        </div>
        <div id="footer">
	        <span>&copy; 2013 GoBoldly. All rights reserved.</span>
        </div>
    </div>
 </body>
</html>
