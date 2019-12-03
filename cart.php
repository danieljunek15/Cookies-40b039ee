<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="styles.css">
<title> Bit Acedamy </title>
</head>
<body>

<h1> Baasketballen #1 </h1>
<h1> Voetballen #2 </h1>
<h1> Hokey #3 </h1>

<form action="" method="post" class="form-example">
    <div class="form-example">
        <input name="User" type="number" placeholder="welke actievitijd wil je selecteren" id="num" required>
    </div>
    <div class="form-example">
        <input type="submit" value="Commitment!" id="sub">
    </div>

    <?php
session_start();
if (isset($_POST["User"])) {
        setcookie("User", $_POST["User"]);
    }

?>
</body>
</html>

