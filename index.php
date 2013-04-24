<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Travel Labs</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="icon" type="image/png" href="favicon.png">
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-38349865-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<script>
    
    $(document).ready(function() {
        //Fades
        $("#title").hide();
        $("#title").fadeIn("slow");
        
        //Email
        
        $("#email_submit").click(function() {
        var email = $("#email_field").val();
        	if ((email.length != 0) && (email.indexOf("@") !== -1)) {
            $.get('service/email_siphon.php', {addy: email}, "json");
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
	            <span>Bringing all the world's</span><br />
	            <span>experiences</span>
	            <span id="highlight">into one place.</span>
            </div>
            <div id="subtext">
	            <span>GoBoldly allows you to discover, book, and share curated travel experiences
		            <br /> aligned with your passions and interests.</span><br /><br />
	            <span>Sign up now to receive updates and an invitation to our private beta.</span>
            </div>
            <div id="email_box">
                <input type="text" id="email_field">
            <div id="email_submit"></div>
        </div>
        <div id="response"></div>
    </div>
        </div>
    </div>
 </body>
</html>