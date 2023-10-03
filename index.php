<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <div class="titol">
  	<h1>Welcome 2: Los_chupacharcos</h1>
  </div>
  <ul>
    <?php
    $imgs = scandir("./img", SCANDIR_SORT_ASCENDING);
    foreach ($imgs as $img) {
      if ($img == "." || $img == "..") {
        continue;
      }
      if (substr($img, -3) == "jpg" || substr($img, -3) == "png") {
        $name = substr($img, 0, -4);
      } else if (substr($img, -4) == "jpeg") {
        $name = substr($img, 0, -5);
      }
      echo "<li><a href='profile/$name.html'>";
      echo "<img src='img/$img' width='130'>";
      echo "<div>" . $name . "</div></a></li>";
    }
    ?>
  </ul>
</body>
</html>
