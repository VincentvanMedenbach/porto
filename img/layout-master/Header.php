<?php
$pagina = basename($_SERVER["PHP_SELF"]);
?>
<!doctype html>
<html>
<head>
    <link href="css/Main.css" type="text/css" rel="stylesheet">
    <title>vincent</title>
    <meta charset="UTF-8">
</head>


<body>
<header>

    <img class="logo" src="img/Logo.png" alt="Logo">
    <nav>
        <h4>Gaming mijn hobby!</h4>
        <ul>
            <li>
                <a <?php if ($pagina == "index.php") {
                    echo 'class = current';
                } else {
                    echo 'class = "menuknop"';
                } ?> href="index.php">
                    <p class="MenuKnoop"> Home</p>

                </a>
            </li>
            <li>
                <a <?php if ($pagina == "mijnhobby.php") {
                    echo 'class = current';
                } else {
                    echo 'class = "menuknop"';
                } ?> href="mijnhobby.php">

                    <p class="MenuKnoop">mijn hobby</p>

                </a>
            </li>
            <li>
                <a <?php if ($pagina == "Nieuws.php") {
                    echo 'class = current';
                } else {
                    echo 'class = "menuknop"';
                } ?> href="Nieuws.php">
                    <p class="MenuKnoop">Nieuws</p>
                </a>
            </li>
        </ul>
    </nav>
</header>
<?php require_once("Ads.php") ?>




