<?php
try{
    $host = "localhost";
    $dbname = "gajian";
    $username = "root";
    $pass = "";
    $koneksi = new PDO("mysql:host=" . $host . 
    ";dbname=".  $dbname, $username, $pass);
    $koneksi->exec("set names utf8");

    $sql = "SELECT count(id) FROM kursus WHERE jml_sesi=0 ";
    $result = $koneksi->query($sql)->fetchAll();

    var_dump($result);

}catch(PDOException $exception){
    echo "Database could not be connected: " . $exception->getMessage();
}

?>