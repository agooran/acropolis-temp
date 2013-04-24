<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Travel Labs</title>
<link href="assets/css/style.css" rel="stylesheet" type="text/css" />
<link rel="icon" type="image/png" href="favicon.png">
<script src="assets/js/jquery-1.8.2.min.js" type="text/javascript"></script>
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
        
        //Links
        
        $("#home_link").click(function() {
            window.location = "index.php";
        });
        
        $("#mission_link").click(function() {
            $("#container").load("pages/mission.php");
            window.location.hash = "mission";
        });
        
        $("#vision_link").click(function() {
            $("#container").load("pages/vision.php");
            window.location.hash = "vision";
        });
        
        $("#team_link").click(function() {
            $("#container").load("pages/team.php");
            window.location.hash = "team";
        });
        
        //Email
        
        $("#email_submit").click(function() {
        var email = $("#email_field").val();
        	if ((email.length != 0) && (email.indexOf("@") !== -1)) {
            $.get('service/email_siphon.php', {addy: email}, "json");
            $("#response").text("The email address "+email+" has been submitted. Thank you for opening up the world with us.");
            $("#email_field").val("");
            
            }
            else $("#response").text("That email address is invalid. Please try again.")
        });

        
    });
</script>
</head>
<body>
    <div id="wrapper">
        <div id="menu">
            <ul>
                <li id="home_link">Home</li>
                <li id="mission_link">Mission</li>
                <li id="team_link">Team</li>
                <!a href="http://travellabs.co/blog" target="_blank"--><!--li id="blog_link">Blog</li></a-->
            </ul>
        </div>
        <div id="container">
            <div id="title"></div>
            <div id="pics">
            </div>
            <!--div id="blurb">
            <p>Redefining the way you discover and experience travel.</p>
            </div-->
            <div id="thevideo" style="margin: 20px auto;text-align:center">
                <iframe style="box-shadow: 0px 0px 5px black;" src="http://player.vimeo.com/video/63291615" width="500" height="281" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
            </div>
            <div id="email_box">
            <p id="email_blurb">Enter your email address to receive updates.</p>
            <div id="email_entry">
                <input type="text" id="email_field">
            </div>
            <div id="email_submit">Submit</div>
        </div>
        <div id="response"></div>
    </div>

        </div>
    </div>
 </body>
</html>