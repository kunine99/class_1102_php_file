<?php
    $dsn="mysql:host=localhost;charset=utf8;dbname=file_uploade";
    $pdo=new PDO($dsn,'root',);
    $rows=$pdo->query("select * from users")->fetchAll();

    echo "<ul>";
    foreach($rows as $key => $row){
        echo "<li>";
        echo 
        echo "</li>";


    }
?>