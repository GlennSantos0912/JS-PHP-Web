<?php include 'sendemail.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Glenn Patrick Santos</title>
   <link rel="stylesheet" href="Myweb(GlennPatrickSantos).css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
<script src="index.js"></script>
</head>

<body>
<div id="headercontainer">
    <div id="header">
  <img src="Logo.png" alt="logo" width="60" height=40>
  <h1>Glenn Patrick Santos </h1>
</div>

        <div id="topnav">
          <a onclick=" " href="Home(GlennPatrickSantos).php" target="_parent">HOME</a>
          <a onclick=" " href="Contact info.php" target="_parent">CONTACT INFO</a>
          <a onclick=" " href="About.php" target="_parent">ABOUT</a>

        <input type="search" placeholder=" Search..." id="site-search" name="Search"
               aria-label="Search through site content">
               <button type="button" class="button">Search</button>


   </div>
 </div>


    <div id="wrapper">
        <div id="content">
        <img src="Header Image.png" >
            <p><strong>Hi, I'm Glenn Patrick Santos</strong></p>
			<p><strong>What do I do?<strong></p>
			<p>I'm a college student studying Bachelor of science in Computer science.</p>
</div>
</div>





<div id="rspcontainer">
  <div id="RightSidePanel">
      <h1>WELCOME!</h1>
      <li>My first website<p>this is my first website as Im studying computer science</p></li>
      <li>My Games<p>Call of Duty:Mobile</p>
      <p>PUBG:mobile</p></li>
      <li>Personal blogs</li>
      <li>Tips & Tricks</li>
      <li></li>
</div>
  </div>

  <div class="com-content">
      <!--alert messages start-->
      <?php echo $alert; ?>
      <!--alert messages end-->

      <!--contact section start-->

      <div class="contact-section">
        <div class="contact-info">
          <div><i class="fas fa-map-marker-alt"></i>Laoag City, Philippines</div>
          <div><i class="fas fa-envelope"></i>glennsantos0912@gmail.com</div>
          <div><i class="fas fa-phone"></i>+639669839659</div>
          <div><i class="fas fa-clock"></i>Mon - Fri 8:00 AM to 5:00 PM</div>
        </div>
        <div class="contact-form">
          <h2>Leave a Reply</h2>
          <form class="contact" action="" method="post">
            <input type="text" name="name" class="text-box" placeholder="Your Name" required>
            <input type="email" name="email" class="text-box" placeholder="Your Email" required>
            <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
            <input type="submit" name="submit" class="send-btn" value="Send">
          </form>
        </div>
      </div>

      <!--contact section end-->

      <script type="text/javascript">
      if(window.history.replaceState){
        window.history.replaceState(null, null, window.location.href);
      }
      </script>
  </div>


      <div id=Footer>
      <h1>Social Media</h1>
      <ul><img src="facebook icon.png" width="20" height=20 /><a href="#Glenn Patrick Santos" >Glenn Patrick Santos</ul>
      <ul>  <img src="instagram icon.png" width="20" height=20 /><a href="#glennsantosss" >glennsantosss</ul>
      <ul> <img src="gmail icon.png" width="20" height=20 /><a href="#glennsantos0912@gmail.com" >glennsantos0912@gmail.com</ul>

    </div>


</body>
</html>
