<?php
try{
    $pdo = new PDO('mysql:dbname=loja;host=localhost','root','');
    
} catch (PDOException $e) {
    print "Erro: " . $e->getMessage() . "<br>";
    die();
}

?>