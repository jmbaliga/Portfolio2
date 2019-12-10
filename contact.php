
<!doctype html>
<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-143266012-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-143266012-1');
    </script>


    <title>Julie Baliga - Portfolio</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/9abc6f4c0d.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lobster+Two|Poppins&display=swap" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css" />


</head>
<body id="hero" data-spy="scroll" data-target="#nav-menu" data-offset="50">
    <header id="header">
        <div class="container">

            <div id="logo" class="pull-left">

                <h1><a href="index.html#hero">JM Baliga</a></h1>
            </div>

            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="index.html#hero"><i class="fas fa-home"></i> Home</a></li>
                    <li><a href="index.html#about"><i class="fas fa-info-circle"></i> About Me</a></li>
                    <li><a href="index.html#education"><i class="fas fa-graduation-cap"></i> Education</a></li>
                    <li><a href="index.html#download-resume"><i class="fas fa-file-download"></i> Resume</a></li>
                    <li class="menu-has-children">
                        <a href="#projects">Projects</a>
                        <ul>
                            <li class="menu-has-children">
                                <a href="projects.html#ppp">Paul's Pet Place (HTML/CSS/JavaScript/PHP)</a>

                                <ul>
                                    <li><a href="#projects">Github</a></li>
                                </ul>
                            </li>
                            <li class="menu-has-children">
                                <a href="projects.html#ppp2">Paul's Pet Place (Bootstrap 3)</a>

                                <ul>
                                    <li><a href="#projects">Github</a></li>
                                </ul>

                            </li>

                            <li><a href="projects.html#airline-res">Airline Reservation System (Java)</a></li>
                            <li><a href="projects.html#banking-app">Banking App (Java)</a></li>
                            <li class="menu-has-children">
                                <a href="index.html#projects">Portfolio</a>
                                <ul>
                                    <li><a href="index.html#projects">Github</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="index.html#contact"> <i class="fa fa-envelope"></i> Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>


    <section id="hero">
        <div class="hero-container">
            <h1>Julie M. Baliga</h1>
            <h2>The best way to predict the future is to create it. -- Abraham Lincoln</h2>
            <a href="index.html#about" class="btn-learn-more">learn more</a>
        </div>
    </section><!-- #hero -->
	 <!---->
    <main id="main">
	 

				<section class="thankyou">
					 <header class="blockheader" class="container">
							 <h1 class="container-text2" <a name="thankyou">Thank you for your submission!</h1>
					 </header>

			 </section>
<<?php
if(!isset($_POST['submit']))
{

	echo "error; you need to submit the form!";
}
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

//Validate first
if(empty($name)||empty($visitor_email))
{
    echo "Name and email are mandatory!";
    exit;
}

if(IsInjected($visitor_email))
{
    echo "Bad email value!";
    exit;
}

$email_from = 'stardreamed@gmail.com';
$email_subject = "New Form submission";
$email_body = "You have received a new message from the user $name.\n".
    "Here is the message:\n $message\n";

$to = "stardreamed@gmail.com";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
//Send the email!
mail($to,$email_subject,$email_body,$headers);
//done. redirect to thank-you page.
header('Location: thank-you.html');


// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}

?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</main>


    <footer class="text-center">
        <br><br>
        <p>© Copyright 2019 <a href="mailto:julie.baliga@gmail.com">Julie M. Baliga</a></p>
    </footer>

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/easing.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/hoverIntent.js"></script>
    <script src="js/superfish.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
