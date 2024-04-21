<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/bc0c93d44b.js" crossorigin="anonymous"></script>
    <link href="header.css" rel="stylesheet">
    <link href="footer.css" rel="stylesheet">
    <title>Buy</title>
    <style>
        * {
    background-color: #F7EEDD;
    box-sizing: border-box;
  }

        .content{
            margin-top:100px;
            display:flex;
            margin-bottom : 50px;
            margin-left: 30px;
        }
        .content img{
            width:100%;
            height:100%;
        }
        .content .img{
            width:500px;
            height:600px;
            margin-right:30px;
        }
        h2,h3{
            font-size: 1rem;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  font-weight: 600;
  letter-spacing: 1px;
  color: rgb(13, 13, 45);
        }
        h2{
            font-size: 2rem;
        }
        .frm {
  margin-left: 10px;
}
.frm h2{
  font-size: 1rem;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  font-weight: 600;
  letter-spacing: 1px;
  color: rgb(13, 13, 45);
}
.inp{
  width: 300px;
  margin: 10px;
  border: none;
  border-bottom: 1px solid rgb(13, 13, 45);
  animation: mymove 5s ease-out;
}
input[type=email]{
  font-size: small;
    font-weight: 300;
    font-family: 'Times New Roman', Times, serif;
    color: black;
    padding: 5px;
  box-sizing: border-box;
  border-bottom: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}
textarea{
  font-size: small;
    font-weight: 300;
    font-family: 'Times New Roman', Times, serif;
    color: black;
    padding: 5px;
  box-sizing: border-box;
  border-bottom: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}
 .sub{
  color: black;
  padding: 0.5rem;
  font-size: 0.8rem;
  text-transform: uppercase;
  border-radius: 4px;
  font-weight: 400;
  display: block;
  width: 80px;
  margin: 20px;
  cursor: pointer;
  border: 1px solid rgba(24, 12, 12, 0.2);
  background: transparent;
  margin-bottom: 10px;
}

.button{
    border:none;
    background-color:transparent;

}
.sub:hover{
  background:rgb(189, 181, 181);
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
      <li class="item"><a  href="Collections.php">Collections</a></li>
      <li class="item"><a href="contact.php">Contact</a></li>
      <li class="item"><a  href="about.php">About</a></li>
          <li class="item"><a  href="user_profile.php">profile</a></li>
      <li class="item button_log"><a href="logout.php">LogOut</a></li>
      <li class="toggle "><a href="#"><i class="fas fa-bars"></i></a></li>
    </ul>
  </section>
  <script src="home.js" ></script>

  <div class="content">
    <?php 
    require("db.php");
       $num = $_SESSION['id'];

       $query = "SELECT * FROM `arts` WHERE id='$num'";
       $result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
    if($rows==1){
        $row = mysqli_fetch_assoc($result);
         // Fetch the row as an associative array
                echo'        <div class="img" > <img src= ' .$row['image'] . '></div>
                <div class = "info">
                        <h2>  ' .$row['title'] .'</h2>
                        <h3> by' .$row['artist'] .' </h3>
                        <h3> category : '. $row['type'] .' </h3>
                        <h3> Rs '. $row['price'] .'</h3>';
         }
    else{
	echo "error";
	}
    ?>
    <?php
     require('db.php');
     $number = $_SESSION['number'];
     $query = "SELECT * FROM `users` WHERE number='$number'";
     $result = mysqli_query($con, $query) or die(mysqli_error($con));
     $row = mysqli_fetch_assoc($result);
     
     // Insert purchase details into the buyers table when the purchase button is clicked
     if(isset($_POST['submit'])) {
         // Assuming you have a form with fields like email and address for the purchase details
         $trn_date = date("Y-m-d H:i:s");
         
         // Insert purchase details into the buyers table
         $insert_query = "INSERT INTO `buyers` (`user_id`, `art_id`, `purchase_date`) 
                          VALUES ('".$row['id']."', '".$_SESSION['id']."', '$trn_date')";
         $insert_result = mysqli_query($con, $insert_query);
         if($insert_result) {
             echo "<div class='buy'>
                     <h2>Your order is placed</h2>
                     <p>The Payment will be cash On Delivery</p>
                   </div>";
         } else {
             echo "Error occurred while processing your order. Please try again later.";
         }
     }
 
    else{

    ?>
    <div class="buy">
    <form class="frm" action="buy.php" method="post">
     <a class="sub" > <input name ="submit" type=submit value="Purchase" class="button" ></a>
</form>
<?php } ?>
    </div>
</div>
</div>

    
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