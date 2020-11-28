<?php

    if(isset($_POST['name'])) {
        $variable = $_POST['name'];
        setcookie('first', $_POST['name']);
        session_start();
        $_SESSION['name'] = $variable;
        header("location: welcome.php");
    }
    else header("location: index.php");
    ?>