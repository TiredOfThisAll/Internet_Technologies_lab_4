<?php

    if(isset($_POST['name'])) {
        $variable = $_POST['name'];
        setcookie('first', $_POST['name'], time() + 3600);
    }
    ?>
