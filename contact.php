<?php
    if(isset($_POST["submit"])) {

        $mail = new PHPMailer();
        $mail->IsSmtp();
        $mail->SMTPDebug = 1;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure =  

        $mailFrom= $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];
        
        $mailTo = "kuol@kuolkuol.com";
        $headers = "From:" . $mailFrom;
        $txt = "You have recieveed an email from ". $mailFrom.".\n \n ".$message;
        mail($mailTo,$subject,$txt,$headers);
        header("Location: index.php?mailsent");
        $msg = "message sent successfully!";
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>

     <!-- METADATA -->
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <meta name="description" content="get in contact with kuol kuol">
     <meta name="author" content="kuol kuol">
     <meta name="robots" content="noindex">
     
     <!-- CDN LINKS -->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
     <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed|Montserrat" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Open+Sans|Playfair+Display" rel="stylesheet">



     <!-- EXTERNAL LINKS -->
     <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
     <link rel="stylesheet" href="./style.css">

     <!-- OTHER INFORMATION -->
    <title>Contact | Kuol Kuol</title>

</head>
<body>

    <!-- START: HEADER SECTION -->
    <div class="header">
        <div class="header__container">
            <!-- HEADER HEADING SECTION -->
            <div class="header__heading">
                <div class="bars" id="bars"><i class="fas fa-bars"></i></div>
                <a href="./index.html" class="logo">kuol.</a>
            </div>
            <!-- HEADER NAVIGATION -->
            <nav class="nav" id="nav">
                <ul class="nav__list">
                <li class="nav__item"><a href="./about.html" class="nav__link">about.</a></li>
                    <li class="nav__item"><a href="./portfolio.html" class="nav__link">portfolio.</a></li>
                    <li class="nav__item"><a href="./contact.php" class="nav__link">contact.</a></li>
                    <li class="nav__item"><a href="./privacy.html" class="nav__link">privacy.</a></li>
                    <li class="nav__item"><a href="mailto:kuolk19@gmail.com" class="nav__link"><i class="far fa-envelope"></i></a></li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- END: HEADER SECTION -->

   <!-- START: BANNER -->
    <div class="banner">
        <div class="center">
            <h2 class="banner__heading">Contact</h2>
            <h3 class="banner__sub-heading">/ˈkɑːn.tækt/</h3>
        </div>
    </div>
   <!-- END: BANNER -->
    <!-- START: CONTACT FORM  -->
    <div class="contact-form" >

        <h1>EMAIL: kuolk19@gmail.com<h1>
        <form action="" class="contact-form" name="contact-form" action="contactform.php" method="post" disabled="disabled">
                <div class="form-field">
                    <label for="email">email</label>
                    <input type="email" name="email" id="email" placeholder="email" disabled> 
                </div>
                
         
                <div class="form-field">
                    <label for="subject">subject</label>
                    <input type="text" name="subject" id="subject" placeholder="subject" disabled>
                </div>
                
      
            
                <div class="form-field">
                    <label for="textarea">message</label><br>
                    <textarea name="textarea" name="message" id="" cols="30" rows="10" placeholder="Message" disabled></textarea>
                </div>

            <input type="submit" value="send mail" class="button-primary">
        </form> 
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d321303.3268281848!2d-114.35433369398585!3d51.01278199569303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x537170039f843fd5%3A0x266d3bb1b652b63a!2sCalgary%2C+AB!5e0!3m2!1sen!2sca!4v1555520702502!5m2!1sen!2sca" width="100%" height="450" frameborder="0" style="border:0;padding-top:20px;" allowfullscreen></iframe>
    </div>
    <!-- END: CONTACT FORM -->

<script src="./scripts/script.js"></script>
</body>
</html>