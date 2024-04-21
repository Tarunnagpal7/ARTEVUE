<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link href="header.css" rel="stylesheet">
    <link href="footer.css" rel="stylesheet">
    <link href="art1.css" rel="stylesheet">
    <link href="user_profile.css" rel="stylesheet">
    <style>
        *{
margin: 0;
padding: 0;
background-color:#F7EEDD;
box-sizing: border-box;
}
body{
scrollbar-gutter: stable both-edges;
width: 100%;
}
        .main{
            margin-top:100px;
            margin-left:30px;
        }
       .profile h2{
        font-size:1.2rem;
        font-weight:200;
        border-bottom:1px solid black;
        margin:20px;
       }
       .profile .key{
        font-weight:600;
       }
       .profile .value{
        margin-left:100px;
       }
       .art{
        margin-left:-80px;
       }
     .footer{
        width:100%;
     }
        </style>
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
<?php 
require('db.php');

// Check if the user is logged in
if(!isset($_SESSION['number'])) {
    // If not logged in, redirect to the login page
    header("location: login.php");
    exit; // Make sure to exit after redirecting
}

// Fetch user information from the database
$number = $_SESSION['number'];
$query = "SELECT * FROM `users` WHERE number='$number'";
$result = mysqli_query($con, $query) or die(mysqli_error($con));
$row = mysqli_fetch_assoc($result);

// Fetch purchased art for the logged-in user from the buyers table
$purchased_query = "SELECT arts.* FROM buyers 
                    INNER JOIN arts ON buyers.art_id = arts.id 
                    WHERE buyers.user_id = '".$row['id']."'";
$purchased_result = mysqli_query($con, $purchased_query) or die(mysqli_error($con));

?>

<div class="main">
    <div class="profile">
        <!-- Display user profile information -->
        <h2><span class="key">Name</span> <span class="value"><?php echo $row['fname'] . " " . $row['lname']; ?></span></h2>
        <h2><span class="key">Number</span> <span class="value"><?php echo $row['number']; ?></span></h2>
        <h2><span class="key">Email</span> <span class="value"><?php echo $row['email']; ?></span></h2>
        <h2><span class="key">Address</span> <span class="value"><?php echo $row['adress']; ?></span></h2>
        
        <!-- Display purchased art -->

        <section class="arts">
    <div class="art">
    <h1>Purchased Art:</h1>
        <ul class="cards">
            <?php 
                    while($rows = mysqli_fetch_assoc($purchased_result)){ 
                        echo '<li class="cards_item">
                                <div class="card">
                                    <div class="card_image"><img width="100%" height="100%" src="' . $rows['image'] . '"></div>'; 
                        echo       '<div class="card_content">
                                        <h2 class="card_title">' . $rows['title'] . '</h2>'; 
                        echo            '<p class="card_text">by ' . $rows['artist'] . '</p>'; 
                        echo            '<p class="card_info">' . $rows['type'] . '</p>'; 
                        echo            '<p class="card_info">Rs' . $rows['price'] . '</p>'; 
                        echo           '<p class="card_info">  Status : Booked. </p> 
                                    </div>
                                   </div>
                            </li>'; 
                    }
            ?>
        </ul>
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