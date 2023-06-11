<?php 

include 'functions.php'

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>php-strong-password-generator</title>
</head>
<body class="bg-primary p-5">

    <header class="container-fluid">
        <h1 class="text-center text-white-50">Strong Password Generator</h1>
        <h2 class="text-center text-white">Genera una password sicura</h2>
    </header>

    <main class="container-fluid mt-4">

        <div class="container-fluid">
            <div class="row">
                <div class="col p-4 bg-light">
                    <?php if(isset($_GET["lunghezza"]))  { ?>
                    <?php echo randomPassword($lunghezza) ?>
                    <?php } ?>
                </div>
            </div> 
        </div>

        <div class="container-fluid mt-4">
            <div class="row">
                <div class="col-6  p-4 bg-light">
                    <p>Lunghezza password</p>
                </div>

                <div class="col-6  p-4 bg-light">
                    <form action="index.php">
                        <input type="number"  class="form-control" min="10" max="20" name="lunghezza">
                        <button type="submit" class="btn btn-primary mt-3">VAI</button>
                    </form> 
                </div>
            </div>
        </div>

    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>