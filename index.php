<?php 
session_start();
include("library/class_email_sender.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-fcbparsi-Compatible" content="IE=edge,chrome=1">
  <title>FCB Parsi fanclub</title>
  
    <link name="author" href="Faisal Russel(russel365)" />
    <meta name="description" content="Coming soon, Bootstrap, Bootstrap 3.0, Free Coming Soon, free coming soon, free template, coming soon template, Html template, html template, html5">
    
    <!-- Favicons -->
    <link rel="shortcut icon" href="favicon.ico">
    
    <!-- Mobile -->
  <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
    
  <!-- CSS start here -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="screen">
  <link rel="stylesheet" type="text/css" href="css/styles.css" />
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="css/fonts.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css" />
  <!-- CSS end here -->
  <!-- Google enter yours start here -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>
  <!-- Google fonts end here -->
</head>
<body class="ux">
  <div class="bg-overlay"></div>
  <!-- Preloader start here -->
  <div id="preloader">
    <div id="status"></div>
  </div>
  <!-- Preloader end here -->
<!-- About Icon start here -->
  <div class="about-us"> 
    <a href="#" class="fa fa-file-text-o tool-tip" data-toggle="modal" data-target=".bs-example-modal-lg" data-placement="right" title="About"></a>
  </div>
<!-- About Icon end here -->  
<!-- Contact Icon start here -->
  <div class="contact-us"> 
    <a href="#" class="fa fa-envelope-o tool-tip" data-toggle="modal" data-target=".bs-example-modal-lg2"  data-placement="left" title="Contact"></a>
  </div>
<!-- Contact Icon end here -->
  <!-- Main container start here -->
  <section class="container main-wrapper">
    <!-- Logo start here -->
    <section id="logo" class="fade-down">
      <a href="#" title="FCBParsi fanclub logo soon">
              <img src="img/logo.png" alt="fcbparsi - Coming Soon">
            </a>
    </section>
    <!-- Logo end here -->
    <!-- Slogan start here -->
    <section class="slogan fade-down">  
      <h1>کانون رسمی فرهنگی-هواداری باشگاه بایرن مونیخ</h1>      
      <h2>We are opening soon</h2>  
      <h3>آغاز کار وبسایت بزودی </h3>
    </section>
    <!-- Slogan end here -->
    <!-- Count Down start here -->
    <section class="count-down-wrapper fade-down">
      <ul class="row count-down">                       
        <li class="col-md-3 col-sm-6">   
          <input class="knob days" data-readonly=true data-min="0" data-max="365" data-width="260" data-height="260" data-thickness="0.07" data-fgcolor="#e21f4e" data-bgColor="#e1e2e6" data-angleOffset="180">
          <span id="days-title">days</span>
        </li>    
        <li class="col-md-3 col-sm-6"> 
          <input class="knob hour" data-readonly=true data-min="0" data-max="24" data-width="260" data-height="260" data-thickness="0.07" data-fgcolor="#e21f4e" data-bgColor="#e1e2e6" data-angleOffset="180">
          <span id="hours-title">hours</span>
        </li>    
        <li class="col-md-3 col-sm-6"> 
          <input class="knob minute" data-readonly=true data-min="0" data-max="60" data-width="260" data-height="260" data-thickness="0.07" data-fgcolor="#e21f4e" data-bgColor="#e1e2e6" data-angleOffset="180">
          <span id="mins-title">minutes</span>
        </li>    
        <li class="col-md-3 col-sm-6"> 
          <input class="knob second" data-readonly=true data-min="0" data-max="60" data-width="260" data-height="260" data-thickness="0.07" data-fgcolor="#e21f4e" data-bgColor="#e1e2e6" data-angleOffset="180">
          <span id="secs-title">seconds</span>
        </li>                
      </ul>              
    </section>
    <!-- Count Down end here -->
    <!-- Newsletter start here -->
    <section class="newsletter row fade-down">      
      
            <form action="//afrussel.us10.list-manage.com/subscribe/post?u=9d80e0546273f34e306d026fe&amp;id=748920b40a" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="contact col-md-6 fade-down validate" target="_blank" novalidate>
            <div id="mc_embed_signup_scroll" class="form-group">
                <div><span class="email-ico"> <i class="fa fa-envelope-o"></i> </span>
              <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Your Email">          </div>
            <div id="mce-responses" class="clear">
                <div class="response" id="mce-error-response" style="display:none"></div>
                <div class="response" id="mce-success-response" style="display:none"></div>
            </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
            <div style="position: absolute; left: -5000px;"><input type="text" name="b_9d80e0546273f34e306d026fe_748920b40a" tabindex="-1" value=""></div>
            <div class="clear"><input type="submit" value="Subscribe" name="Submit" id="mc-embedded-subscribe" class="btn-submit"></div>
            </div>
        </form>
    </section>
    <!-- Newsletter end here -->
    <!-- Social icons start here -->
    <ul class="connect-us row fade-down">
      <li><a href="https://facebook.com/fcbparsi" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
      <li><a href="https://twitter.com/fcbparsi" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
      <li><a href="https://plus.google.com/103391939831416492506/" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
      <li><a href="https://telegram.com/fcbparsi" class="telegram tool-tip" title="Telegram"><i class="fa fa-telegram"></i></a></li>
      <li><a href="http://aparat.com/fcbparsi" class="ytube tool-tip" title="Aparat"><i class="fa fa-youtube-play"></i></a></li>
      <li><a href="https://instagram.com/fcbparsi" class="instagram tool-tip" title="Instagram"><i class="fa fa-instagram"></i></a></li>
      <!--  <li><a href="#" class="pinterest tool-tip" title="Pinterest"><i class="fa fa-pinterest-square"></i></a></li>-->
    </ul>
    <!-- Social icons end here -->
    <!-- Footer start here -->
    <footer class="fade-down">        
      <p class="footer-text">
      <br>&copy; "FCBParsi" The Official fanclub of FC Bayern for the persian people 2012-2017, All Rights Reserved.<br>کانون رسمی هواداری باشگاه بایرن مونیخ
      </p>
    </footer>
    <!-- Footer end here -->
  </section>
<!-- About start here -->
  <div class="modal fade bs-example-modal-lg" role="dialog" aria-hidden="true" data-keyboard="true" data-backdrop="static" tabindex="-1">
    <a href="#" class="fa fa-times cls-pop" data-dismiss="modal"></a>
    <div class="modal-dialog modal-lg clearfix">
      <div class="modal-content pop-up">
        <h3>About US</h3>
        <div class="clearfix">
        <div>
          <p>The official fanclub of FC Bayern for the Persian People. </p>
          <p>#MiaSanMia </p>
        </div>
      </div>
<ul class="features">      
      <li>BayernPars</li>
      <li>MohammadAmin Tajvidy</li>
      <li>Adam Nybäck</li>
      <li>AmirHossein K.</li>
      <li>Florian k.</li>
      <li>Alireza Safaei</li>
      <li>Peka</li>
      <li>Mir Hadi S.</li>
      <li>...</li>
      <li>Bahar J.</li>
      <li>Mr.Gigabyte / Nandan</li>
      <li>Mahshid B.</li>
      <li>Barend / Xenial</li>
      <li>...</li>
      <li>BotStack and S4 Dynamics team.</li>
    </ul>         
      </div>
    </div>
  </div>
<!-- About end here -->
<!-- Contact start here -->
  <div class="modal fade bs-example-modal-lg2" role="dialog" aria-hidden="true" data-keyboard="true" data-backdrop="static" tabindex="-1">
    <a href="#" class="fa fa-times cls-pop" data-dismiss="modal"></a>
    <div class="modal-dialog modal-lg">
      <div class="modal-content pop-up pop-up-cnt">
        <h3>Contact us</h3>
        


        <!--Email Sending Script -->

        <?php 
      $name="";
      $from="";
      $message="";
        if(isset($_POST['submit'])){

          $name=mysql_real_escape_string($_POST['name']);
          $from=mysql_real_escape_string($_POST['email']);
          $message=mysql_real_escape_string($_POST['comments']);
          $code=$_SESSION['captcha'];
            $captcha=mysql_real_escape_string($_POST['captcha']);
          $to="Bayern.pars@gmail.com"; // Add your e-mail here
          if($code!=$captcha){
      echo '<script>alert("Invalid Captcha");</script>';
      }else{    
          include("library/send_email.php");
      }

        //Isset finishes here 
        }
        ?>


        <!-- Email Sending Script-->

        <div class="clearfix cnt-wrap">
         <form id="contactform" name="contactform" action="" method="post">
          <div id="result"></div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 columns">
                <input type="text" id="name" placeholder="Name" name="name" value="<?php echo $name;?>" required>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 columns">
                <input type="text"  id="email" placeholder="Email" name="email" value="<?php echo $from;?>" required>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 columns">
                <textarea id="comments" name="comments" placeholder="Message" required><?php echo $message;?></textarea>
              </div>
               
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 columns captcha text-center">
           <img src="captcha.php"><br>
                   <input type="text" name="captcha" placeholder="captcha"required>                
              </div>
              
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center columns">             
                <button name="submit" id="submit" class="contact-btn-submit" type="submit">Send</button>
              </div> 
            </form>        
        </div>


        <div class="clearfix cnt-wrap">
          <div class="col-md-4 col-sm-4">
            <i class="fa fa-phone"></i>
            <h4>Phone</h4>
            <p>Phone: (000) 000 0000<br />Mobile: (000) 000 0000<br />Fax: (000) 000 0000</p>
          </div>

          <div class="col-md-4 col-sm-4">      
            <i class="fa fa-envelope-o"></i>
            <h4>Email</h4>
            <p>info@fcbparsi.com<br />info@fcbparsi.com</p>
          </div>
          <div class="col-md-4 col-sm-4">
            <i class="fa fa-map-marker"></i>
            <h4>Address</h4>
            <p>Säbener Straße, <br>
              51-57 81547 <br>
              München, Germany</p>
            </div>
          </div>
        </div>
      </div>
    </div>
<!-- Contact end here --> 
    <!-- Main container start here -->
    <!-- Javascript framework and plugins start here -->
    <script type="text/javascript" src="js/jquery.js"></script> 
    <script type="text/javascript" src="js/bootstrap.min.js"></script> 
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/modernizr.js"></script> 
    <script type="text/javascript" src="js/appear.js"></script>     
    <script src="js/jquery.knob.js"></script>
    <script src="js/jquery.ccountdown.js"></script>
    <script src="js/init.js"></script>
    <script src="js/general.js"></script>
    
<!-- Javascript framework and plugins end here -->
</body>
</html>


