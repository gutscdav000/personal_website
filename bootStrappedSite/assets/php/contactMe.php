<?php
if(isset($_POST['email'])) {


    $email_to = "gutscdav000@gmail.com";
    $email_subject = "david's development form submission";

    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }


    // validation expected data exists
    if(!isset($_POST['fname']) ||
        !isset($_POST['lname']) ||
        !isset($_POST['email']) ||
        !isset($_POST['comment'])) {
        died('We are sorry, but it appears you forgot to fill out the entire form.');
    }



    $first_name = $_POST['fname']; // required
    $last_name = $_POST['lname']; // required
    $email_from = $_POST['email']; // required
    $comments = $_POST['comment']; // required

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }

    $string_exp = "/^[A-Za-z .'-]+$/"; 

  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }

  if(!preg_match($string_exp,$last_name)) {
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
  }

  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }


  if(strlen($error_message) > 0) {
    died($error_message);
  }

    $email_message = "Form details below.\n\n";


    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }



    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";

// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);
?>

<!-- Thank you for contacting us, your feedback is the main vehicle by which I improve this site! I will be in touch with you soon. -->
<!DOCTYPE html>
<html lang="en">

	<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<title>David's Development Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Font Awesome -->
	<script src="https://use.fontawesome.com/a686b3c76b.js"></script>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="../css/styles.css">
	</head>


	<body>
		<div class="container"> <!-- PUT YER SHIT IN HERE BOYS -->


			<!-- Navigation -->

			<nav class="container navbar fixed-top navbar-toggleable-md navbar-inverse">
						  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						  </button>
				 			 <a class="navbar-brand" href="../../index.html"><img src="assets/images/logo.png" alt="David's Development"></a>
							<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<ul class="navbar-nav mr-auto">
								    <li class="nav-item active">
										<a class="nav-link" href="../../index.html">Home</a> <!-- Dont forget to do this shit for the blind people -->
									</li>
									<li class="nav-item">
										<a class="nav-link" href="../../about.html">About<span class="sr-only">(current)</span></a>
									 </li>
									 <li class="nav-item">
										<a class="nav-link" href="../../projects.html">Projects</a>
									 </li>
									 <li class="nav-item">
										<a class="nav-link" href="../../articles.html">Articles</a>
									 </li>
									 <li class="nav-item">  <!--use 'active' then its the page they be on-->
										<a class="nav-link" href="../../contactMe.html">Contact Me</a>
									 </li>
								</ul>
							</div>
						</nav>




			<header class="hidden-sm-down">
				<div class="jumbotron">
					<div id="jumbopacity">
					  <h1 class="display-1">Home<br>David's Development</h1>
					</div>
				</div>
			</header>


			<main>
				<div class="aboutMe project-container">
	 				<br><br><br>
					Thank you for contacting us, your feedback is the main vehicle by which I improve this site! I will be in touch with you soon.
					<br><br><br>
				</div>

				<div class="main-container">

						<button action="about.html" class="main-button" onclick="window.location.href='../../about.html'"><span>About</span> </button>
						<button class="main-button" onclick="window.location.href='../../projects.html'"><span> Projects </span></button>
						<button class="main-button" onclick="window.location.href='../../articles.html'"><span> Articles </span></button>
						<button class="main-button" onclick="window.location.href='../../contactMe.html'"><span> Contact Me </span></button>

				</div>


			</main>


			<footer class="aboutFoot">
						<div class="contactUs">
							<div class="row">
								<div class="foot1 col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 item">
									<!-- <div>Icons made by <a href="https://www.flaticon.com/authors/bogdan-rosu" title="Bogdan Rosu">Bogdan Rosu</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div> -->
									<a href="https://www.linkedin.com/in/davidgutsch/"><img src="../images/linkedin-logo-button.png" alt="Linkedin Logo"></a>
								</div>
								<div class="foot1 col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 item">
									<!-- <div>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div> -->
									<a href="https://www.instagram.com/guchemane/"> <img src="../images/instagram-logo-button.png" alt="Instagram Logo"></a>
								</div>
								<div class="foot1 col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 item">
									<!-- <div>Icons made by <a href="https://www.flaticon.com/authors/roundicons" title="Roundicons">Roundicons</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div> -->
									<a href="https://github.com/gutscdav000"><img src="../images/github-logo-button.png" alt="Github Logo"></a>
								</div>
							</div>
						</div>

			</footer>
		</div>
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <script>$('.carousel').carousel()</script>
  </body>
</html>


<?php
}
?>

