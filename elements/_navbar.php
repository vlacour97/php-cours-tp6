<?php if (isset($routes)): //Autre syntaxe du if sans accolade http://php.net/manual/fr/control-structures.alternative-syntax.php ?>
<nav>
    <ul>
        <?php
        // Affichage de la navbar
        foreach ($routes as $route=>$controller) {
            echo '<li><a href="?route='.$route.'">'.$route.'</a></li>';
        }
        ?>
    </ul>
</nav>
<?php endif; ?>