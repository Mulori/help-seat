<?php 
    define ("server", "127.0.0.1");
    define ("username", "root");
    define ("password", "");
    define ("port", "3310");
    define ("dbname", "help-seat");


    try {
        $pdo = new PDO("mysql:host=".server.";dbname=".dbname.";port=".port."",username,password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Não foi possivel conectar ao banco de dados: " . $e->getMessage());
    }

?>