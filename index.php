<?php 

include 'functions.php'

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-strong-password-generator</title>
</head>
<body>

    <main>

        <h1>Scegliere La Lunghezza Della Pasword Da Generare</h1>

        <form action="index.php">
            <input type="number" min="8" max="10" name="lunghezza">
            <button type="submit">VAI</button>
        </form>

        <?php if(isset($_GET["lunghezza"]))  { ?>
            <?php echo randomPassword($lunghezza) ?>
        <?php } ?>


    </main>
    
</body>
</html>