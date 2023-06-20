<div class="chemin <?php echo $page === "home" ? "home_nav" : "other"; ?>">
    <ul>
        <?php

        switch (basename($_SERVER["PHP_SELF"])) {
            case 'showcat.php':
                echo '<li><a href="home.php">Home</a></li>
                      <li>/</li>
                      <li>Tous nos modèles</li>';
                break;

            case 'listcar.php':
                echo '<li><a href="home.php">Home</a></li>
                <li>/</li>
                <li>Tous nos modèles</li>
                <li>/</li>
                <li>' . ucwords($selecPro[""]) . '</li>';

            default:
                echo '<li><a href="home.php">Home</a></li>';
                break;
        }
        ?>



    </ul>
    <!-- <p>Ahhhhhhhhhhhhhh/Ahhhhhhhhhhhhhh</p> -->
</div>