<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Metrofessional | Productivity Via Technology</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link href='http://fonts.googleapis.com/css?family=Merriweather+Sans:400,800' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
				<span id="top"></span>
        <div id="container">
        <header>
        <div id="toggle-menu">
        <img src="img/menu-icon.png" />
        </div>
        <div id="drop-menu">
        <ul>
        <li class="first"><a onClick="$.scrollTo('#about-us', 1000, {axis: 'y'}); $('#drop-menu').toggle(400);">About Us</a></li>
        <li class="first"><a onClick="$.scrollTo('#contact', 1000, {axis: 'y'}); $('#drop-menu').toggle(400);">Contact Us</a></li>
        <li><a  onClick="$.scrollTo('#terms', 1000, {axis: 'y'}); $('#drop-menu').toggle(400);">Client Terms</a></li>
        <li><a  onClick="$.scrollTo('#privacy', 1000, {axis: 'y'}); $('#drop-menu').toggle(400);">Privacy</a></li>
        <li class="last"><a href="https://metrofessional.freshbooks.com">Account Login</a></li>
        </ul>
        </div>
        <div id="top-right"><img src="img/logo-top-right.png" /></div>
        <div id="logo"><a href="/">Metrofessional.</a></div>
        </header>
        <span id="about-us"></span>
        <section id="intro">
        <div class="content">
        <p><h3>Responsive & &ldquo;Mobile First&rdquo; Strategists</span></h3> 
        <div>
          <ul>
            <li>Hybrid Mobile Development</li>
            <li>API Usage & Creation</li>
            <li>CMS Plugin/Module Development & Theme Design</li>
            <li>Custom E-commerce Solutions</li>           
            <li>Project Management, Support & Training</li>
            <li>Legacy Migrations & Interfaces</li>          
            <li>Managed Hosting</li>
          </ul>
          <div>
          Industry Experience:  Travel/Tourism, Public Sector, Healthcare, Gaming & Startups
        </div>
        <h4>
        <a href="#contact">Contact us</a> for reference work and to discuss your next project.  
        </h4>   
        </section>
        <section id="contact">     
        <div class="content">
        <?php
        if (isset($_REQUEST['email']))
        //if "email" is filled out, send email
          {
          //send email
          $email = $_REQUEST['email'] ;
          $name = $_REQUEST['name'] ;
          $message = $_REQUEST['message'] ;
          mail("metrofessional@metrofessional.com", "Metrofessional.com Contact Form- From: ".$name,
          $message, "From:" . $email);
          echo "<div id='thank-you'>Thank you and we'll be in touch.</div>";
          }
        else
        //if "email" is not filled out, display the form
          {
          echo "<form method='post' action='index.php#contact'>
          NAME<br /> <input class='text' name='name' type='text' /><br />
          <br />EMAIL<br /> <input class='text' name='email' type='text' /><br />
          <br />MESSAGE<br />
          <textarea name='message' rows='15' cols='40'></textarea><br /><br /><div style='text-align:center'>
          <input class='submit' type='submit' value='Submit' /></div>
          </form>";
          }
        ?>
        </div>
        </section>  
        <section id="terms">
        <div class="content">
        <p>
        <ul>
        <li>Client satisfaction is guaranteed.</li>
        <li>Clients pay for services delivered at a pre-determined hourly rate unless a flat rate service has been agreed upon.</li>
        <li>Typically, hourly clients are invoiced monthly with payment terms of "Due on receipt".</li> 
        <li>Flat rate payment terms are generally 50% deposit prior to work starting and 50% (remaining balance) due prior to go live.</li>
        <li>A detailed timesheet is provided with all invoices.</li>
        <li>Email support is free and best effort.  Phone and online support is available.</li>        
        </ul>
        </p>        
        </div>
        </section>        
        <section id="privacy">
        <div class="content">
        <p>
        Your privacy is extremely important to us and we are committed to safeguarding the information you entrust to us. 
        </p><p>
        We will not disclose information about you or your business without permission unless it is required by government subpoena.
        </p>
        </div>
        </section>
        </div>
        <footer>
        <div style="clear:both; text-align:center; padding:20px; color:#D21C1C; font-weight:bold">
        PRODUCTIVITY VIA TECHNOLOGY
        </div>
        <div align="center" style="padding:10px;"><a style="color:#7a7a7a"  onClick="$.scrollTo('#top', 1000, {axis: 'y'});">scroll to top</a></div>
        </footer>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>
