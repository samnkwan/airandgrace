<?php
   $name    = '';
   $email   = '';
   $phone   = '';
   $message = '';

   $nameErrMessage   = 'Please enter your name';
   $emailErrMessage  = 'Please enter a valid email address';
   $phoneErrMessage  = 'Please enter your phone number';
   $messageErrMessage= 'Please add a message';

   if(isset($_POST['send'])){
      $name    = $_POST['name'];
      $email   = $_POST['email'];
      $phone   = $_POST['phone'];
      $message = $_POST['message'];

      // do some server side validation
      $bPassed          = false;
      $bPassedName      = false;
      $bPassedPhone     = true;
      $bPassedEmail     = false;
      $bPassedMessage   = false;

      $bPassedName = strlen($_POST['name']) ? true : false;
      $bPassedEmail =  (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) ? true : false;
      $bPassedMessage = strlen($_POST['message']) ? true : false;

      $bPassed = ($bPassedName && $bPassedPhone && $bPassedEmail && $bPassedMessage) ? true : false;

      if($bPassed){

         // Send the email yo.

         echo '<script>window.location = "get-in-touch-confirmation.html";</script>';
      }

      var_dump($message);
      //  $to = "email@example.com"; // this is your Email address
      //  $from = $_POST['email']; // this is the sender's Email address
      //  $first_name = $_POST['first_name'];
      //  $last_name = $_POST['last_name'];
      //  $subject = "Form submission";
      //  $subject2 = "Copy of your form submission";
      //  $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
      //  $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];
       //
      //  $headers = "From:" . $from;
      //  $headers2 = "From:" . $to;
      //  mail($to,$subject,$message,$headers);
      //  mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
      //  echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
       // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
      <title>Get In Touch | Air &amp; Grace</title>
      <meta name="description" content="We would love to talk to you about how we can make your event special, so please get in touch with us." />


       <!-- Bootstrap -->
       <link href="bs/css/bootstrap.min.css" rel="stylesheet">

   	<!-- Custom styles for this template -->
      <link href="css/carousel.css?6" rel="stylesheet">
   	<link href="css/main.css?6" rel="stylesheet">

      <link href="fonts/fonts.css" rel="stylesheet">

	</head>
	<body>
      <nav class="navbar navbar-default navbar-fixed-top navbar-trans">
         <div class="container">
            <div><a class="navbar-brand" href="index.html"><img class="logo" src="img/logo2.png" alt="Air &amp; Grace"></a></li></div>
            <div class="navbar-header">
               <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <a href="#" class="navbar-brand"></a>
           </div>

           <div class="collapse navbar-collapse" id="navbar">
              <ul class="nav navbar-nav">
                 <li><a href="index.html">HOME</a></li>
                 <li><a href="about-us.html">ABOUT</a></li>
                 <li><a href="gallery.html">GALLERY</a></li>
                 <li><a href="our-showreel.html">VIDEO</a></li>
                 <li><a href="get-in-touch.php">CONTACT</a></li>
              </ul>
           </div><!--/.nav-collapse -->
         </div>
      </nav>

      <div class="jumbotron contact-jumbotron">
      	<div class="container contact-container">
            <div class="row">
               <div class="col-sm-2"></div>
               <div class="col-sm-8">
                  <h1>Get In Touch</h1>
                  <p>
                     We would love to talk to you about how we can make your event special,
                     so please get in touch with us.
                     <br />
                     <br />
                  </p>
               </div>
            </div>

            <div class="row">
               <div class="col-sm-2"></div>
               <div class="col-sm-8">
                  <div class="height-holder">
                     <form method="post" id="contact-from" role="form" data-toggle="validator" action="" >
         				<div class="form-group">
         					<input type="text" value="<?php echo $name; ?>" maxlength="40" class="form-control" id="name" name="name" placeholder="NAME" >
                        <?php
                           if(isset($bPassedName) && !$bPassedName){
                              echo '<div class="help-block with-errors">'.$nameErrMessage.'</div>';
                           }
                        ?>
         				</div>

                     <div class="form-group">
         					<input type="text" value="<?php echo $email; ?>" maxlength="40" class="form-control" id="email" name="email" placeholder="EMAIL" >
                        <?php
                           if(isset($bPassedEmail) && !$bPassedEmail){
                              echo '<div class="help-block with-errors">'.$emailErrMessage.'</div>';
                           }
                        ?>
         				</div>

                     <div class="form-group">
         					<input type="text" value="<?php echo $phone; ?>" maxlength="40" class="form-control" id="phone" name="phone" placeholder="PHONE" >
         					<div class="help-block with-errors"></div>
         				</div>
         				<div class="form-group">
         					<textarea id="message" maxlength="1200" name="message" class="form-control" rows="8" placeholder="MESSAGE"><?php echo $message; ?></textarea>
                        <?php
                           if(isset($bPassedMessage) && !$bPassedMessage){
                              echo '<div class="help-block with-errors">'.$messageErrMessage.'</div>';
                           }
                        ?>
                  	</div>

                     <div class="form-group">
                        <button type="submit" name="send" class="btn btn-primary">SEND</button>
                     </div>
                  </form>
                  </div>
      			</div>

      		</div> <!-- end row -->
      	</div>
      </div> <!-- end jumbotron -->

      <div class="container contact-triple">
      	<div class="row">
            <div class="col-sm-4">
               <div class="height-holder">
                  <div class="contact-item item1">
                     <a href="tel:+64-21-166-0776">
                        <img class="social-icon" src="img/phone-round.png">
                     </a>
                     <a href="tel:+64-21-166-0776">
                        <h3>PHONE</h3>
                        <p>(+64) 21 166 0776</p>
                     </a>
                  </div>
               </div>
            </div>
            <div class="col-sm-4">
               <div class="height-holder">
         			<div class="contact-item item2">
                     <a target="_blank" href="mailto:info@airandgrace.co.nz?Subject=Hi%20there!">
                        <img class="social-icon" src="img/email-round.png">
                     </a>
                     <a target="_blank" href="mailto:info@airandgrace.co.nz?Subject=Hi%20there!">
         					<h3>EMAIL</h3>
         					<p>INFO@AIRANDGRACE.CO.NZ</p>
         			</div>
      			</div>
      		</div>
            <div class="col-sm-4">
               <div class="height-holder">
         			<div class="contact-item item3">
                     <a target="_blank" href="https://www.facebook.com/airandgraceaerials/">
                        <img class="social-icon" src="img/facebook-round.png">
                     </a>
                     <a target="_blank" href="https://www.facebook.com/airandgraceaerials/">
         					<h3>FACEBOOK</h3>
         					<p>/AIRANDGRACEAERIALS/</p>
                     </a>
         			</div>
      			</div>
            </div>
      	</div><!-- /.row -->
      </div>

      <div class="container social">
         <div class="row">
             <div class="col-sm-12">
               <hr class="socialline">
               <div class="social-box">
                  <div class="sayhello">Say hello</div>
                  <div class="social-icon-wrapper">
                     <a href="mailto:info@airandgrace.co.nz?Subject=Hi%20there!" target="_blank"><img class="social-icon" src="img/email.png"></a>
                     <a href="https://www.facebook.com/airandgraceaerials/" target="_blank"><img class="social-icon" src="img/facebook.png"></a>
                     <a href="https://www.instagram.com/airandgrace.aerials/" target="_blank"><img class="social-icon" src="img/instagram.png"></a>
                     <a href="https://www.youtube.com/channel/UC9JwZOkoa1dIxwogmq-uVfw" target="_blank"><img class="social-icon" src="img/youtube.png"></a>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="container footer">
      	<div class="row">
      		 <div class="col-lg-12">
      			<span class="copyright">COPYRIGHT OF AIR AND GRACE</span>
      		</div>
      	</div>
      </div>
	</body>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bs/js/bootstrap.min.js"></script>

</html>
