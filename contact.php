

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="header.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/bc0c93d44b.js" crossorigin="anonymous"></script>
    <link href="contact.css" rel="stylesheet">
    <link href="footer.css" rel="stylesheet">
    <title>Contact</title>
</head>
<body>
<?php 
  session_start();
  if(!isset($_SESSION["number"])){
  header("Location: login.php");
  exit();  
}
  ?> 
    <section class="header">
    <a href = "home.php"><h1> ARTEVUE</h1></a>
        <ul class="menu">
          <li class="item"><a href="art1.php">Arts</a></li>
          <li class="item"><a href="artist.php">Artists</a></li>
          <li class="item"><a href="contact.php">Contact</a></li>
          <li class="item"><a  href="about.php">About</a></li>
          <li class="item"><a  href="user_profile.php">profile</a></li>
          <li class="item button_log"><a href="logout.php">LogOut</a></li>
          <li class="toggle "><a href="#"><i class="fas fa-bars"></i></a></li>
        </ul>
      </section>
      <script src="/HEADER/header.js" ></script>
      <section class="title">
         <div class="image"> <img src="/content/img9.jpg" alt="contact"></div>
         <h1>Contact US</h1>
      </section>
      <section class="contact">
        <div class="info">
        <div class="box">
          <i class="fa-solid fa-house tag"></i>
          <p class="cp"> Artevue Building ,Ajwa Road ,Vadodara, India 390019</p>
        </div>
        <div class="box">
        <i class="fa-solid fa-phone tag"></i>
        <p class="cp">91+ 9687698299</p>
        </div>
        <div class="box">
        <i class="fa-solid fa-envelope tag"></i>
        <p class="cp">artevue2024@gmail.com</p>
        </div>
 </div>

 <div class="email">
 <?php 
   require('db.php');
   if(isset($_REQUEST['name'])){
       $name = $_POST["name"];
       $email = $_POST["email"];
       $message = $_POST["message"];
       $trn_date = date("Y-m-d H:i:s");
       $query = "INSERT INTO `contact` ( `name`, `email`, `message`, `trn_date`) VALUES ( '$name', '$email', '$message', '$trn_date')";
               $res = mysqli_query($con,$query);
               if($res){
                   echo "<div class='frm'>
       <h2>Your Message Reached successfully.</h2>
       <p>We get back to you as soon as possible. </p>";
               }
   }else{
?>
    <h1>GET IN TOUCH</h1>
    <form action="contact.php" class="frm" method="post">
      <h2>Name</h2>
      <input type="text" name="name" class="inp" value="NAME" required>
      <h2>Email</h2>
      <input type="email" name="email" class="inp" value="EMAIL" required>
      <h2>Message</h2>
      <textarea rows="5" cols="20" class="MESSAGE inp"name="message" required>MESSAGE</textarea>
     <a  class="sub" > <input type=submit value="SUBMIT" class="button" ></a>
    </form>
    <?php } ?>
  </div>
      </section>
      <section class="footer">
    <div class="ft_content">
      <div class="ft">
        <h1>ARTEVUE</h1>
        <a href="art1.php">Arts</a>
        <a href="artist.php">Artirt</a>
        <a href="contact.php">Contact Us</a>
        <a href="about.php">About</a>
      </div>
      <div class="ft_about hid">
        <h2> Arts </h2>
        <a href="art1.php">Painting</a>
        <a href="art1.php">Sketch</a>
        <a href="art1.php"> Sculpture</a>
        <a href="art1.php">Printmaking </a>
        <a href="art1.php">Drawing</a>
      </div>
      <div class="ft_about hid">
        <h2> Famous Artists </h2>
        <a href="artist.php">Leo Vinc</a>
        <a href="artist.php">Salva Dal</a>
        <a href="artist.php">Joan Miro</a>
        <a a href="artist.php">Pablo Pica</a>
      </div>
      <div class="ft_about hid">
        <h2> Contact</h2>
        <a href="contact.php">Quires</a>
        <a href="contact.php">Delivery Issues</a>
        <a href="contact.php"> Refund</a>
        <a a href="contact.php">Get In Touch</a>
      </div>
  
      <div class="ft_about hid">
        <h2> About </h2>
        <a href="about.php">The Team</a>
        <a href="about.php">Work With Us</a>
        <a href="about.php"> Privacy Policy </a>
        <a a href="about.php"> Conditions</a>
      </div>
    </div>
    </div>
  
    <div class="ft_company">
      <p>2024 copyright : artevue.com</p>
    </div>
  </section>
</body>
</html>