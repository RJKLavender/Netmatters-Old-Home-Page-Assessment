<?php

// this file will pull the values out of the database and allow the html to have the echoed daata to display the news info.
// call the database
require_once 'db.php';

//select the needed colums from the database for the news section and save it as a string valiable
$sql = "SELECT Article_Class, Tag, Image, Alt,Title, Description, Button_Color, Author_Image, Author_Alt, Author_Name, Date FROM `news`";

//prepare database and run query
$stmt = $pdo->prepare($sql);
$stmt->execute();

//save all rows to a Associate Array
$allNews = $stmt->fetchAll(PDO::FETCH_ASSOC);

