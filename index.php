<body>
    <h1>Projecte Welcome 1</h1>
    <ul>
        <?php
        $imgs = scandir("./img", SCANDIR_SORT_ASCENDING);
        foreach ($imgs as $img) {
            if ($img == "." || $img == "..")
                continue;
            $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));

            if (in_array($ext, ["jpg", "png", "jpeg"])) {
                $name = pathinfo($img, PATHINFO_FILENAME);
                echo "<li>";
                echo "<a href='profile/$name.html'>";
                echo "<img src='img/$img' width='130' alt='$name'>";
                echo " $name";
                echo "</a>";
                echo "</li>";
            }
        }
        ?>
    </ul>
</body>
