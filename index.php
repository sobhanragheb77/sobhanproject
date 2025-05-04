<?php
require "functions.php";
//require "router.php";
require "DataBase.php";


$configue= require "confige.php";

$db = new database($configue['database']);
$post = $db->query("SELECT * FROM post");



foreach($post as $posts){
    echo "<li>" . $posts['TITLE'] . "</li>";
}