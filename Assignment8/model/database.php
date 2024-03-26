<?php
    // connect to the my_guitar_shop database
    //not sure what the CS351user information is and have a set local instance on computer already
    $dsn = 'mysql:host=localhost;dbname=my_guitar_shop';
    $username = 'root';
    $password = 'root';
    $error_message = '';
    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('./view/database_error.php');
        exit();
    }
?>


 
