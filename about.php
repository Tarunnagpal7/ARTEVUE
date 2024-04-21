<!DOCTYPE html>
<html lang="en">

<head>
  <link href="https://fonts.google.com/specimen/Dancing+Script" rel="stylesheet">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="about.css" rel="stylesheet">
  <link href="header.css" rel="stylesheet">
  <link href="footer.css" rel="stylesheet">
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
  <script src="header.js" ></script>

  <section class="about_artvue">
    <h1 class="title_ab"> About Artevue</h1>
    <div class="ab_flex">
      <div class="ab_first">
        <h1 class="our">Our Team</h1>
        <p>At Artevue, we're on a mission to revolutionize the way art is discovered, appreciated, and shared. Founded by a team of passionate art enthusiasts, Artevue is more than just an online platform – it's a vibrant community where artists and art lovers come together to celebrate creativity in all its forms.
        </p>
    </div>
    <div class="ab_first">
    <h1 class="our">Our Vision</h1>
    <p>Our vision is simple yet ambitious: to make art accessible to everyone, everywhere. We believe that art has the power to transcend boundaries, spark meaningful conversations, and inspire positive change. By providing a platform where artists can showcase their work and connect with a global audience, we're breaking down barriers and democratizing the art world.</p>
  </div>
  <div class="ab_first">
    <h1 class="our">Our Mission</h1>
    <p>At Artevue, our mission is to empower artists and art enthusiasts by providing a dynamic platform where creativity thrives, connections are forged, and boundaries are transcended. We believe that art is a powerful force for positive change, capable of inspiring, challenging, and uniting people from all walks of life.
      Through our commitment to innovation, inclusivity, and excellence, we strive to create a global community where artists can share their work with the world and art lovers can discover, collect, and connect with exceptional pieces that resonate with them.
      Driven by our passion for art and our dedication to supporting artists, Artevue is more than just a marketplace – it's a vibrant ecosystem where creativity knows no bounds. Join us as we reimagine the art world and unlock new possibilities for artistic expression and appreciation.</p>
    </div>
    </div>
  </section>

  <section class="teams">
    <h1>Our Team</h1>
    <div class="main">
        <ul class="cards">
          <li class="cards_item">
            <div class="card">
              <div class="card_image"><img src="/content/tarun.jpeg"></div>
              <div class="card_content">
                <h2 class="card_title"> TARUN NAGPAL</h2>
                <button class="btn card_btn" ><a href="https://www.linkedin.com/in/tarun-nagpal-b0b792254/">LINKEDIN</a></button>
              </div>
            </div>
          </li>
          <li class="cards_item">
            <div class="card">
              <div class="card_image"><img src="/content/yash.jpg"></div>
              <div class="card_content">
                <h2 class="card_title">YASHRAJ SOLANKI</h2>
                <button class="btn card_btn"><a href="https://www.linkedin.com/in/yashraj-solanki-7b7363256/">LINKEDIN</a></button>
              </div>
            </div>
          </li>
        </ul>
        </div>
  </section>

  <section class="work">
    <h1>Work With US</h1>
    <p>
      
Absolutely, here's a draft for your "Work With Us" statement tailored for your website, Artevue:</p>

<h2>
  Join Our Artistic Community
</h2>
<p>
  At Artevue, we believe in the power of art to inspire, connect, and transform. We're passionate about providing a platform where artists can thrive and art enthusiasts can discover exceptional pieces that resonate with them.
</p>
<h2>
  Why Collaborate with Artevue?
</h2>
<p>
  
  Exposure: Showcase your work to a global audience of art lovers and collectors. Our platform attracts visitors from all corners of the world, ensuring maximum exposure for your art.
  Curation: We carefully curate our platform to ensure that only the highest quality art is featured. When you collaborate with Artevue, you join a community of talented artists who are dedicated to excellence.
  Support: We're here to support you every step of the way. From setting up your profile to promoting your work, our team is committed to helping you succeed.
  Networking: Connect with fellow artists, collectors, and art professionals through our platform. Expand your network and discover new opportunities for collaboration and growth.
</p>
<h2>
  How to Get Started
</h2>
<p>
  
  Joining Artevue is easy! Simply create an artist profile and start uploading your work. Our intuitive platform makes it simple to showcase your art and connect with potential buyers.
  Whether you're an established artist or just starting out, Artevue is the perfect place to share your passion for art with the world.
</p>
<h2>
  Ready to Join Us?
</h2>
<p>
  Become part of our vibrant artistic community today. Join Artevue and let your creativity shine!
</p>
  </section>

  <section class="privacy">
    <h1>Privacy Policy</h1>
    <p>At Artevue, we are committed to protecting your privacy and ensuring that your personal information is handled in a safe and responsible manner. This Privacy Policy outlines the types of personal information we collect, how we use it, and the measures we take to safeguard your data.</p>
    <h2>Information We Collect</h2>
    <p>
        Personal Information: When you register for an account on Artevue, we may collect personal information such as your name, email address, location, and other details you provide voluntarily.
        Artwork Information: If you are an artist using our platform to showcase your work, we may collect information about your artwork, including images, descriptions, and pricing.
        Transaction Information: If you make a purchase on Artevue, we may collect information related to the transaction, such as your payment details and shipping address.
        Usage Information: We may collect data about how you interact with our website and mobile app, including your IP address, device information, and browsing activity.
    </p>
    <h2>How We Use Your Information</h2>
    <p>
      To Provide Services: We use your personal information to create and manage your account, process transactions, and provide customer support.
      To Improve Our Platform: We may use aggregated data to analyze trends, monitor user engagement, and enhance the user experience.
      To Communicate With You: We may send you updates, newsletters, or promotional materials related to Artevue, but you can opt out of these communications at any time.
      To Comply With Legal Obligations: We may disclose your information in response to legal requests or to protect our rights, property, or safety.</p>
    </p>
      <h2>Data Security </h2>
      <p>We take appropriate measures to protect your personal information from unauthorized access, disclosure, alteration, or destruction. This includes using encryption, secure servers, and access controls to safeguard your data.
      </p>
      <h2>Third-Party Services</h2>
      <p>Artevue may use third-party services, such as payment processors or analytics providers, to assist in delivering our services. These third parties may have access to your personal information, but they are required to use it only for the purpose of providing their services to us and are obligated to maintain the confidentiality of your data.</p>
  </section>
  <section class="term">
    <h1 >
      Terms and Condition
    </h1>
    <p>
      By accessing or using Artevue, you agree to abide by these terms and conditions, governing your use of the platform, including account registration, user conduct, transactions, intellectual property rights, privacy, and termination.</p>
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