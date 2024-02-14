<?php
    var_dump(
        $_GET
    );
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


        <title>PHP Strong Password Generator</title>
    </head>
    <body class="text-center m-3">

        <header>
            <h1>PHP Strong Password Generator</h1>
        </header>

        <main>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <form action="" method="GET">
                            <input type="number" name="passsword-lenght" placeholder="Inserisci la lunghezza della password" required>
                            <button class="btn">INVIA</button>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>