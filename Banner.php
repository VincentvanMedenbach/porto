<?php
$pagina = basename($_SERVER["PHP_SELF"]);
?>
<!doctype html>
<html>
<head>
    <link href="css/Main.css" type="text/css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,300" type="text/css" rel="stylesheet">
    <title id="TITEL">cv</title>
    <meta charset="UTF-8">
</head>


<body>
<header>
    <nav id="MENU">
        <ul>
            <li>
                <a <?php if ($pagina == "index.php") {
                    echo 'class = current';
                } else {
                    echo 'class = "menuknop"';
                } ?> href="index.php">
                    <p class="MenuKnoop">Home</p>

                </a>
            </li>
            <li>
                <a <?php if ($pagina == "Over.php") {
                    echo 'class = current';
                } else {
                    echo 'class = "menuknop"';
                } ?> href="Over.php">

                    <p class="MenuKnoop">Over mij</p>

                </a>
            </li>
            <li>
                <a <?php if ($pagina == "Jobs.php") {
                    echo 'class = current';
                } else {
                    echo 'class = "menuknop"';
                } ?> href="Jobs.php">
                    <p class="MenuKnoop">Beroep</p>
                </a>
            </li>
            <li>
                <a <?php if ($pagina == "Contact.php") {
                    echo 'class = current';
                } else {
                    echo 'class = "menuknop"';
                } ?> href="Contact.php">
                    <p class="MenuKnoop">Opleiding</p>
                </a>
            </li>
        </ul>

    </nav>
</header>