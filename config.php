<?php 

function connection() { 
    // serwer 
    $mysql_server = "sql112.000a.biz"; 
    // admin 
    $mysql_admin = "a000b_16095898"; 
    // hasło 
    $mysql_pass = "gamesamongus"; 
    // nazwa baza 
    $mysql_db = "a000b_16095898_tgas"; 
    // nawiązujemy połączenie z serwerem MySQL 
    @mysql_connect($mysql_server, $mysql_admin, $mysql_pass) 
    or die('Brak połączenia z serwerem MySQL.'); 
    // łączymy się z bazą danych 
    @mysql_select_db($mysql_db) 
    or die('Błąd wyboru bazy danych.'); 
} 

?>
