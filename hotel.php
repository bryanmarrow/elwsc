<?php


$rootPath = "./";
require($rootPath."db/dbconfig.php");

$title = isset($_GET['title'])? $_GET['title'] : "Euroson Latino World Salsa Championship 2023 - #ELWSC2023";
$description = isset($_GET['description'])? $_GET['description'] : "Diciembre 4-9, 2023 Cancún, México | ¡El Campeonato Mundial más grande del planeta!";
$keywords = isset($_GET['keywords'])? $_GET['keywords'] : "salsa, bachata, euroson latino, mexico";
$author = isset($_GET['author'])? $_GET['author'] : "BMARROW";
$ogtitle = isset($_GET['ogtitle'])? $_GET['ogtitle'] : "Euroson Latino World Salsa Championship 2023 - ELWSC2023";
$ogdescription = isset($_GET['ogdescription'])? $_GET['ogdescription'] : "Diciembre 4-9, 2023 Cancún, México | ¡El Campeonato Mundial más grande del planeta!";
$ogimagen = isset($_GET['ogimagen'])? $_GET['ogimagen'] : "https://eurosonlatino.com.mx/mail/og-image-elwsc2021.jpg";



require("templates/header.php");
require("pages/hotel.inc.php");
require("templates/footer.php");



?>