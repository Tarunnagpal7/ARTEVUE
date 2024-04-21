<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/bc0c93d44b.js" crossorigin="anonymous"></script>
    <link href="header.css" rel="stylesheet">
    <link href="artist.css" rel="stylesheet">
    <link href="footer.css" rel="stylesheet">
    <title>Artists</title>
</head>
<body>
<?php 
  session_start();
  if(!isset($_SESSION["number"])){
  header("Location: login.php");
  exit();  
}

if(isset($_POST['pro'])){ // Check if the 'add' button is clicked
  $_SESSION['id_pro'] = $_POST['pro']; // Set the 'id' session variable to the value of 'add'
  header("Location: profile.php"); // Corrected syntax for header redirection
  exit; // Terminate script execution after redirection
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
      <script src="header.js" ></script>

      <h1 class="heading"> Our Artists </h1>

      <form method = "post" action="artist.php">
      <section class="artists">
        <div class="main">
            <ul class="cards">
            <?php 
                require('db.php');
                $sql = "SELECT * FROM artists"; 

                $result = mysqli_query($con, $sql);
         
                if(mysqli_num_rows($result) > 0){
                    while($rows = mysqli_fetch_assoc($result)){ 
                        echo '<li class="cards_item">
                               <div class="artist_image"><img src=" '.$rows['artist_image'] .' "></div> 
                            <div class="card_content">
                                  <h2 class="artist_title">'.$rows['artist_name'] .'</h2>
                                  <button type= "submit" name="pro" value= " '.$rows['id'] .' " class="btn card_btn">Show Profile</button>
                                </div>
                              </li> ';
                    }
                }
            ?>
            </ul>
        </div>
      </section>
              </form>

      <script src="artist.js"></script>
      <section class="footer">
    <div class="ft_content">
      <div class="ft">
        <h1>ARTEVUE</h1>
        <a href="art1.php">Arts</a>
        <a href="artist.php">Artirt</a>
        <a href="#">Collections</a>
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