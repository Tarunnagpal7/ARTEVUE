<!DOCTYPE html>
<html lang="en">

<head>
  <link href="https://fonts.google.com/specimen/Dancing+Script" rel="stylesheet"/>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="home.css" rel="stylesheet"/>
  <script src="https://kit.fontawesome.com/bc0c93d44b.js" crossorigin="anonymous"></script>
  <title>ArteVue</title>
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
  <script src="home.js" ></script>

  <section class="first_div">
    <div class="title">
      <img height="100%" width="100%" src="/content/title.png" alt="artvue">
    </div>
    <div class="vid">
      <video class="head_video"  autoplay loop>
        <source src="/content/header_video.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
    </div>
  </section>
  <pre
    class="text1">"I found I could say things with color and shapes that 
                  I couldn't say any other way - things I had no words for."  
                                                                                                                     - O'Keeffe</pre>
  <section class="second_div">
    <div class="sec_img">
      <img class="img1" src="/content/img1.jpg" alt="art">
    </div>
    <div class="sec_content">
      <p class="p">
        Transform your space into a masterpiece
        with ARTEVUE's exclusive art collection -
        don't miss out on the opportunity to elevate
        your surroundings and impress everyone who
        walks through your door.
      </p>

      <a href="art1.php" class="btn_art" role="button" data-bs-toggle="button">Check Out Arts</a>
    </div>

  </section>

  <section class="third">
    <h1>Arts</h2>
      <hr>
      <div class="main">
        <ul class="cards">
          <li class="cards_item">
            <div class="card">
              <div class="card_image"><img src="/content/img2.jpg"></div>
              <div class="card_content">
                <h2 class="card_title"> Amidst Flowers</h2>
                <p class="card_text">Leo Vinci</p>
              </div>
            </div>
          </li>
          <li class="cards_item">
            <div class="card">
              <div class="card_image"><img src="/content/img3.jpg"></div>
              <div class="card_content">
                <h2 class="card_title">Bird's Cheersup</h2>
                <p class="card_text">Joan Miró</p>
              </div>
            </div>
          </li>
          <li class="cards_item">
            <div class="card">
              <div class="card_image"><img src="/content/img4.jpg"></div>
              <div class="card_content">
                <h2 class="card_title">Enigma of Colors</h2>
                <p class="card_text">Pablo Pica</p>
              </div>
            </div>
          </li>
          <li class="cards_item">
            <div class="card">
              <div class="card_image"><img src="/content/img5.jpg"></div>
              <div class="card_content">
                <h2 class="card_title">LuminesVision</h2>
                <p class="card_text">Henri Mat</p>
              </div>
            </div>
          </li>
          <li class="cards_item">
            <div class="card">
              <div class="card_image"><img src="/content/img6.jpg"></div>
              <div class="card_content">
                <h2 class="card_title">A Girl's Sketch</h2>
                <p class="card_text">Diago Riv</p>
              </div>
            </div>
          </li>
          <li class="cards_item">
            <div class="card">
              <div class="card_image"><img src="/content/img7.jpg"></div>
              <div class="card_content">
                <h2 class="card_title"> Sunset Silhouette</h2>
                <p class="card_text">Salva Dal</p>
              </div>
            </div>
          </li>
        </ul>

        <button  onclick = "window.location.href='art1.php'" class="view_btn">View More</button>
      </div>
  </section>

  <section class="fourth">
    <div class="four_content">
      <p>
        ARTEVUE proudly showcases the remarkable talent and creativity of our esteemed artists, whose work captivates
        and inspires art enthusiasts worldwide
      </p>

      <a href="artist.php" class="btn_art" role="button" data-bs-toggle="button">Check Out Artirts</a>
    </div>
    <div class="four_img">
      <img class="img8" src="/content/img8.jpg" alt="art">
    </div>

  </section>

  <section class="fifth">
    <h1>Meet Our Artists</h2>
      <hr>
      <div class="main">
        <ul class="cards">
          <li class="cards_item">
            <div class="artist_image"><img src="/content/artist2.jpg"></div>
            <div class="card_content">
              <h2 class="artist_title"> Leo Vinc</h2>
              <button class="btn card_btn">Show Profile</button>
            </div>
          </li>
          <li class="cards_item">
            <div class="artist_image  extra"><img src="/content/artist1.jpg"></div>
            <div class="card_content">
              <h2 class="artist_title">Joan Miró</h2>
              <button class="btn card_btn">Show Profile</button>
            </div>
          </li>
          <li class="cards_item">
            <div class="artist_image"><img src="/content/artist3.jpg"></div>
            <div class="card_content">
              <h2 class="artist_title">Pablo Pica</h2>
              <button class="btn card_btn">Show Profile</button>
            </div>
          </li>
        </ul>
        <button onclick = "window.location.href='artist.php' " class="view_btn">View More</button>
      </div>
  </section>

  <section class="six">
    <h1> Contact Us</h1>
    <p>we pride ourselves on our unwavering commitment to customer support.
      Feel free to reach out to us anytime for assistance or inquiries -
      we're here to ensure your art-buying experience is nothing short of exceptional.</p>
    <button onclick = "window.location.href='contact.php'" class="view_btn">Get In Touch</button>
  </section>
</body>

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


</html>