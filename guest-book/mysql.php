<?php
// global $servername, $username, $password, $database, $table;

$servername =  "localhost";
$username = "root";
$password = "";
$database = "guest_book";
$table_mes = "messages";
$table_files = "files";

$link = new mysqli($servername, $username, $password, $database);
mysqli_set_charset($link, "utf8");
