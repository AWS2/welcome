<style>
    <?php include 'index.css'; ?>
</style>

<body>
    <video autoplay muted loop id="myVideo">
        <source src="https://carontestudio.com/img/f4.mp4" type="video/mp4">
    </video>
    <h1>Projecte Welcome 1</h1>
    <ul class="row">
        <?php
        $imgs = scandir("./img", SCANDIR_SORT_ASCENDING);
        foreach ($imgs as $img) {
            if ($img == "." || $img == "..")
                continue;
            if (substr($img, -3) == "jpg" or substr($img, -3) == "png") {
                $name = substr($img, 0, -4);
            } else if (substr($img, -4) == "jpeg") {
                $name = substr($img, 0, -5);
            }

            echo "<div class='column'>";
            echo "<p>$name</p>";

            echo "<a href='profile/$name.html'>";
            echo "<img id='tv' src='img/$img' width='130'>";
            echo "</a>";
            echo "</div>";
        }
        ?>

    </ul>

</body>