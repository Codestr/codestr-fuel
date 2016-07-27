<?php
/* Set e-mail recipient */
$myemail = "cody@codestr.com";

/* Check all form inputs using check_input function */
$name = check_input($_POST['name'], "Enter your name");
$subject = check_input($_POST['subject'], "Enter a subject");
$email = check_input($_POST['email']);
$userMessage = check_input($_POST['userMessage'], "Write your message");

/* If e-mail is not valid show error message */
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
{
show_error("E-mail address not valid");
}
/* Let's prepare the message for the e-mail */
$message = "

Name: $name
E-mail: $email
Subject: $subject

Message:
$userMessage

";

/* Send the message using mail() function */
mail($myemail, $subject, $message);

/* Redirect visitor to the thank you page */
header('Location: index.php');
exit();
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Cody Barks @ http://codestr.com">
    <meta name="description" content="Codestr is a digital media Studio located in West Plains, Missouri. We specialize in responsive web design & custom development, but also offer brand and identity design, graphic design, SEO and other services." />
    <meta name="keywords" content="West Plains, Missouri, Web Design, Web Development, Ozarks, Graphic Design" />
    <meta property="og:title" content="Codestr is a digital media Studio located in West Plains, Missouri. We specialize in responsive web design & custom development, but also offer brand and identity design, graphic design, SEO and other services." />
    <meta property="og:type" content="website" />  
    <meta property="og:url" content="https://www.codestr.com">
    <meta property="og:description" content="Codestr is a digital media Studio located in West Plains, Missouri. We specialize in responsive web design & custom development, but also offer brand and identity design, graphic design, SEO and other services." />
    <meta property="og:image" content="http://www.codestr.com/images/codestr-las-vegas.jpg" />
    <meta property="og:image:width" content="300" />
    <meta property="og:image:height" content="300" />
    <meta name="google-site-verification" content="eO4h59J_nvyCPxpw8O9ckpo-C7KkNkMZkNLkUqq2d4U" />
    <link rel="icon" type="image/png" href="images/favicon.png">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet"> 
    <link href="/css/ani.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <title>Codestr - Web Design &amp; Development in West Plains, Missouri</title>
</head>

<body>

    <section class="section-main section-intro" id="intro">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul class="social-icons">
                        <li><a href="https://twitter.com/codestrmedia" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.facebook.com/codestr" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://github.com/Codestr" target="_blank"><i class="fa fa-github"></i></a></li>
                        <a href="https://www.digitalocean.com/?refcode=7ff6c1b07506" target="_blank"><img class="digital-ocean"  src="images/digital-ocean-logo.png" alt="Powered By Digital Ocean" /></a>
                    </ul>
                    <img class="section-intro-image" src="images/codestr-media-design.png" alt="Codestr Digital Media Studio" />
                </div>
            </div>
        </div>
    </section>
    
    <section class="section-main">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="text-center">Your Message Sent!</h1>
                    <p>We will get back to you as soon as possible, and appreciate your interest with us.</p>
                    <p><a href="index.php">Back to Codestr</a></p>
                </div>
            </div>
        </div>
    </section>
</body>

<script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="/js/jquery-2.0.2.min.js"></script>
<script src="/js/bootstrap.min.js"></script>

</html>
<?php
exit();
}
?>