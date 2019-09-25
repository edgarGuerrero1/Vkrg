<!DOCTYPE html>
<html lang="en">
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<!-- Header -->
<header class="w3-display-container w3-content w3-center" style="max-width:1500px">
  
  <?php // llamar el documento con la funcion
          require 'ServletImgIndexPrincipal.php';
  ?>
  
  <div class="w3-display-middle w3-padding-large w3-border w3-wide w3-text-light-grey w3-center">
    <h1 class="w3-hide-medium w3-hide-small w3-xxxlarge">JANE DOE</h1>
    <h5 class="w3-hide-large" style="white-space:nowrap">JANE DOE</h5>
    <h3 class="w3-hide-medium w3-hide-small">PHOTOGRAPHER</h3>
  </div>
  
  <!-- Navbar (placed at the bottom of the header image) -->
  <div class="w3-bar w3-light-grey w3-round w3-display-bottommiddle w3-hide-small" style="bottom:-16px">
    <a href="#" class="w3-bar-item w3-button">Home</a>
    <a href="#portfolio" class="w3-bar-item w3-button">Portfolio</a>
    <a href="index.php" class="w3-bar-item w3-button">index 1</a>
  </div>
</header>

<!-- Navbar on small screens -->
<div class="w3-center w3-light-grey w3-padding-16 w3-hide-large w3-hide-medium">
<div class="w3-bar w3-light-grey">
  <a href="#" class="w3-bar-item w3-button">Home</a>
  <a href="#portfolio" class="w3-bar-item w3-button">Portfolio</a>
  <a href="#contact" class="w3-bar-item w3-button">Contact</a>
</div>
</div>
<!-- Page content -->
<div class="w3-content w3-padding-large w3-margin-top" id="portfolio">

  <!-- Images (Portfolio) -->
  
  <?php // llamar el documento con la funcion
          require 'ServletImgIndex.php';
  ?>

  <!-- Contact -->
  <div class="w3-light-grey w3-padding-large w3-padding-32 w3-margin-top" id="contact">
    <h3 class="w3-center">Contact</h3>
    <hr>
    <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed tellus.</p>

    <form action="/action_page.php" target="_blank">
      <div class="w3-section">
        <label>Name</label>
        <input class="w3-input w3-border" type="text" required name="Name">
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" required name="Email">
      </div>
      <div class="w3-section">
        <label>Message</label>
        <input class="w3-input w3-border" required name="Message">
      </div>
      <button type="submit" class="w3-button w3-block w3-dark-grey">Send</button>
    </form><br>
    <div class="contmaps">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7464.810759713511!2d-103.37514537657594!3d20.693756896658797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428af91c6719a67%3A0x15381fff8185db6f!2sMidtown%20Jalisco!5e0!3m2!1ses!2smx!4v1568850771060!5m2!1ses!2smx" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </div>
    <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank" class="w3-hover-text-green">w3.css</a></p>

  </div>

<!-- End page content -->
</div>

</body>
</html>