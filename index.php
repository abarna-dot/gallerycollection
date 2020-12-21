<!DOCTYPE html>
<html>

<head>
  <title>Simple PHP gallery</title>

  <!-- (A) CSS + JS -->
  <link href="basic.css" rel="stylesheet">
  <link href="box.css" rel="stylesheet">
  <script src="box2.js" type="text/JavaScript"></script>
</head>

<body>
  <header>
    <h1>MY COLLECTION</h1>
  </header>
  <!-- (B) LIGHTBOX -->
  <div id="lback" onclick="gallery.hide()">
    <div id="lfront"></div>
  </div>

  <!-- (C) THE GALLERY -->
  <div class="gallery">
    <?php
    // (C1) READ FILES FROM GALLERY FOLDER
    $dir = __DIR__ . DIRECTORY_SEPARATOR . "gallery" . DIRECTORY_SEPARATOR;
    $images = glob($dir . "*.{jpg,jpeg,gif,png,bmp,webp}", GLOB_BRACE);
    // (C2) OUTPUT IMAGES  
    foreach ($images as $i) {
      printf("<img src='gallery/%s' onclick='gallery.show(this)'/>", basename($i));
    }
    ?></div>
  <footer>
    <h3>Created by abarna m</h3>
  </footer>
</body>

</html>