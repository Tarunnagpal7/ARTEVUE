<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/bc0c93d44b.js" crossorigin="anonymous"></script>
    <link href="header.css" rel="stylesheet">
    <link href="art1.css" rel="stylesheet">
    <link href="footer.css" rel="stylesheet">
    <title>Arts</title>
</head>
<body>
<?php 
  session_start();
  if(!isset($_SESSION["number"])){
  header("Location: login.php");
  exit();  
}
  ?>
   <?php  
if(isset($_POST['add'])){ // Check if the 'add' button is clicked
  $_SESSION['id'] = $_POST['add']; // Set the 'id' session variable to the value of 'add'
  header("Location: buy.php"); // Corrected syntax for header redirection
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

      <!-- <div class="filter-container">
    <label for="price-range">Price Range:</label>
    <input type="range" id="price-range" name="price-range" min="0" max="500" value="0">
    <span id="price-display">0</span>
</div> -->

<form method = "post" action="art1.php">

      <section class="arts">
    <div class="main">
        <ul class="cards">
            <?php 
                require('db.php');
                $sql = "SELECT * FROM arts"; 

                $result = mysqli_query($con, $sql);
         
                if(mysqli_num_rows($result) > 0){
                    while($rows = mysqli_fetch_assoc($result)){ 
                        echo '<li class="cards_item">
                                <div class="card">
                                    <div class="card_image"><img width="100%" height="100%" src="' . $rows['image'] . '"></div>'; 
                        echo       '<div class="card_content">
                                        <h2 class="card_title">' . $rows['title'] . '</h2>'; 
                        echo            '<p class="card_text">by ' . $rows['artist'] . '</p>'; 
                        echo            '<p class="card_info">' . $rows['type'] . '</p>'; 
                        echo            '<p class="card_info">Rs' . $rows['price'] . '</p>'; 
                        echo            '<button type="submit" class="btn card_btn" name="add" value="' . $rows['id'] .'">BUY <i class="fa-solid fa-cart-shopping"></i></button>
                                    </div>
                                   </div>
                            </li>'; 
                    }
                }
            ?>
        </ul>
    </div>
</section>
              </form>

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
        <!-- <script src="art1.js"></script>   -->
<!-- 
        <script>
    // Function to update art list based on price range
    function updateArtList(minPrice, maxPrice) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("art-cards").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "fetch_art.php?min_price=" + minPrice + "&max_price=" + maxPrice, true);
        xhttp.send();
    }

    // Function to initialize the price range slider
    function initializePriceSlider() {
        var priceRange = document.getElementById("price-range");
        var priceDisplay = document.getElementById("price-display");

        priceRange.oninput = function() {
            priceDisplay.textContent = this.value;
            updateArtList(0, this.value);
        };
    }

    // Initialize the price slider
    initializePriceSlider(); -->
</body>
</html>