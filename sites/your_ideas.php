<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Satiere</title>
      <link rel="stylesheet" href="../scss/style.css.map" />
      <link rel="stylesheet" href="../css/foundation.css" />
      <link rel="stylesheet" href="../foundation-icons/foundation-icons.css" />
      <link rel="stylesheet" href="../scss/style.css" />
      <link href="http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
      <script src="js/vendor/modernizr.js"></script>
  

  </head>
  <body>
 
<div class="sticky">
<nav class="top-bar" data-topbar role="navigation" data-options="sticky_on: large">
  <ul class="title-area">
    <li class="name">
      <h1><a href="#">SaTiere</a></h1>
    </li>
     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>

  <section class="top-bar-section">
    <!-- Right Nav Section -->
    <ul class="right">
       <li class="has-dropdown">
        <a href="#">SaTiere</a>
        <ul class="dropdown">
          <li><a href="stories.html">Stories</a></li>
          <li><a href="caracters.html">Characters</a></li>
        </ul>
      </li>
      <!-- wenns aktive ist ienfach class="active" -->
      <li class="active"><a href="#">Post new Ideas</a></li>
      <li ><a href="contact_us.html">Contact us</a></li>
     
    </ul>

    <!-- Left Nav Section -->
    <ul class="left">
      <li><a href="../index.html">Home</a></li>
    </ul>
  </section>
</nav>
</div>



    
        <div class="panel">
          <img class="fluegel" src="../img/fluegel.png" alt="Engelsfluegel">
          <h1>Give us some Feedback</h1>
          <p>Please send us your ideas or give us some Feedback <br/>
           
        
          <div class="row">
            

             <p><span>Wie findest du SaTiere? Teile uns hier deine Meinung mit:</span></p>
             
             <form action="email.php" method="POST">
            <input type="text" id="amount" name="ergebnis"/>
            <div id="slider"></div><br/><br/>
            <p><span>Hier kannst du uns deine Idee senden. <br/>Aber denk daran, immer positiv und freundlich zu bleiben, oder wechsle auf die dunkle Seite</span></p>
            <textarea name="idee" class="idee"></textarea>
            <input type="submit" value="  send  " name="send" class="small radius button" />
			</form>
            
            <?php if($_GET['ges']==1){echo "<p>"."Danke für dein Feedback :)"."</p>";}?>
          </div>
           
           <hr>
    
           <a href="#"><i class="fi-social-facebook"></i></a>
            <a href="#"><i class="fi-social-twitter"></i></a>
            <a href="#"><i class="fi-social-google-plus"></i></a>


        </div>
      
      <div class="arrow_down"></div>


    <footer class="footer">
      
      <p><a href="#">Impressum  </a>  |  <a href="#">  Links </a>  |  <a href="about.html">  About</a></p>
  
  
    </footer>
    <script src="../js/vendor/jquery.js"></script>
    <script src="../js/foundation.min.js"></script>
    <script src="../js/jquery-ui.min.js"></script>
    <script src="../js/mein_script.js"></script>

    <script>
      $(document).foundation();
    </script>
  </body>
</html>
