<?php
  include "file_img.php";
  include "db_conn.php";
  include "db_contact.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <script src="app.js"></script>
  <title>Maverick Dresses | Ecommerce Website Design</title>
</head>

<body>
  <div class="header">
  <div class="container">

    <div class="navbar">
      <div class="logo">
        <a href="store.php"><img src="<?php echo $base_url; ?>logo.png" width="125px"></a>
      </div>
            <nav>
        <ul id="MenuItems">
          <li><a href="store.php">Home</a></li>
          <li><a href="product.php">Product</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="account.php">Account</a></li>
        </ul>
      </nav>
      <a href="cart.php"><img src="<?php echo $base_url; ?>cart.png" width="30px" height="30px"></a>
      <img src="<?php echo $base_url; ?>menu.png" class="menu-icon" onclick="menutoggle()">

      </div>
   
  </div>
  </div>
  <!-- Banner -->
  <div id="banner" class="contact-header">
    <div class="page-content">
      <h2 class="page-heading">#readmore</h2>
      <p class="page-desc">Read all case studies about our products!</p>
    </div>
  </div>
  <!-- Contact -->
  <section id="contact-details" class="section-p1">
    <div class="details">
      <span>GET IN TOUCH</span>
      <h2>Visit one of our agency location or contact us today</h2>
      <h3>Head Office</h3>
      <div>
        <li>
          <i class="fa-regular fa-map"></i>
          <p>285 Đội Cấn - Liễu Giai - Ba Đình - Hà Nội</p>
        </li>
        <li>
          <i class="fa-regular fa-envelope"></i>
          <p>an.nv.2030@learning.edu.vn</p>
        </li>
        <li>
          <i class="fa-solid fa-phone-alt"></i>
          <p> +84 23***9999</p>
        </li>
        <li>
          <i class="fa-regular fa-clock"></i>
          <p>Monday to Saturday: 8.00am to 8.pm</p>
        </li>
      </div>
    </div>

    <div class="map">
      <iframe
        src="
      https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.9232486533124!2d105.8189851!3d21.035756799999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab0d127a01e7%3A0xab069cd4eaa76ff2!2zMjg1IMSQ4buZaSBD4bqlbiwgVsSpbmggUGjDuiwgQmEgxJDDrG5oLCBIw6AgTuG7mWkgMTAwMDAw!5e0!3m2!1svi!2s!4v1657441709053!5m2!1svi!2s"
        width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>
  </section>
  <!-- Form -->
  <section id="form-details">
    <form method="POST">
      <span>LEAVE A MESSAGE</span>
      <h2>We love to hear from you</h2>
      <input type="text" placeholder="Your Name" name="your_name" required>
      <input type="email" placeholder="Email" name="email" required>
      <input type="text" placeholder="Subject" name="subject" required>
      <textarea cols="30" rows="10" placeholder="Your Message" name="details"></textarea>
      <a href="mailto:nguyenan22092003@gmail.com"><button class="" name="submit">Submit</button></a>
    </form>

    <div class="people">
      <div>
        <img src="<?php echo $base_url; ?>images/1.png" alt="">
        <p><span>John Doe </span> Senior Marketing Manager <br>Phone: + 000 123 77 88 <br>Email: contact@example.com</p>
      </div>
      <div>
        <img src="<?php echo $base_url; ?>images/2.png" alt="">
        <p><span>William Smith </span> Senior Marketing Manager <br>Phone: + 000 123 77 88 <br>Email:
          contact@example.com
        </p>
      </div>
      <div>
        <img src="<?php echo $base_url; ?>images/3.png" alt="">
        <p><span>Emma Stone </span> Senior Marketing Manager <br>Phone: + 000 123 77 88 <br>Email: contact@example.com
        </p>
      </div>
    </div>
  </section>
   <<!-- ------------------forter-------------- -->
  <div class="footer">
    <div class="container">
      <div class="row">
        <div class="footer-col-1">
          <h3>Dowload Our App</h3>
          <p>Download App for Android and ios mobile phone</p>
          <div class="app-logo">
            <img src="<?php echo"$base_url";?>app1.png">
            <img src="<?php echo"$base_url";?>app2.png">
          </div>
        </div>
        <div class="footer-col-2">
          <img src="<?php echo"$base_url";?>logo.png">
          <p>This page was created to sell clothes to everyone in need!</p>
        </div>
        <div class="footer-col-3">
          <h3>Location</h3>
          <ul>
            <li>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.9244038028505!2d105.81684051485445!3d21.035710585994636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab145bf89bd7%3A0xd94a869b494c04b6!2zMjg1IMSQ4buZaSBD4bqlbiwgVsSpbmggUGjDuiwgQmEgxJDDrG5oLCBIw6AgTuG7mWkgMTAwMDAwLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1658240867390!5m2!1svi!2s"  style="border:0;"  width="200px" height="200px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class='iframe_1'></iframe>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.9244038028505!2d105.81684051485445!3d21.035710585994636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab145bf89bd7%3A0xd94a869b494c04b6!2zMjg1IMSQ4buZaSBD4bqlbiwgVsSpbmggUGjDuiwgQmEgxJDDrG5oLCBIw6AgTuG7mWkgMTAwMDAwLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1658240867390!5m2!1svi!2s"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="iframe_2"></iframe>
            </li>
            
          </ul>
        </div>
        <div class="footer-col-4">
          <h3>Follow Us</h3>
          <ul>
            <a href="https://www.facebook.com/nguyenan22092003/"><li>Facebook</li></a>
            <a href="https://twitter.com/NguynVn38666923"><li>Twitter</li></a>
            <a href="https://www.instagram.com/annn_2293/"><li>Instagram</li></a>
            <a href="https://www.youtube.com/channel/UCbaeTRnErP_lyqpdOR50d_w"><li>YouTube</li></a>
          </ul>
        </div>
      </div>
    </div>
  </div> 
  <!-- -------js for toggle Menu-------- -->
  <script>
    var MenuItems = document.getElementById("MenuItems");

    MenuItems.style.maxHeight = "0px";

    function menutoggle(){
      if(MenuItems.style.maxHeight == "0px")
        {
        MenuItems.style.maxHeight = "200px";
        }
      else
        {
        MenuItems.style.maxHeight = "0px";
        }
    };
  </script>
</body>

</html>