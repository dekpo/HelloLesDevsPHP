<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShiFuMi !!!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        img {
            width: 100%;
        }
    </style>

<body>
    <!-- SI LE CHOIX N'A PAS ETE FAIT ON AFFICHE LES OPTIONS -->
    <?php
    if (!isset($_GET['choice'])) :
    ?>
        <h1 class="text-center">PLAY ShiFuMi</h1>
        <h2 class="text-center">With ME !!!</h2>
        <main class="container-fluid mt-4">
            <h2 class="text-center">Please Choose</h2>
            <div class="row align-items-center">
                <div class="col-12 col-md-4">
                    <a href="?choice=rock">
                        <img src="./images/user-rock.jpg" alt="user rock" class="img-fluid">
                        <h2 class="text-center">Rock</h2>
                    </a>
                </div>
                <div class="col-12 col-md-4">
                    <a href="?choice=scissors">
                        <img src="./images/user-scissors.jpg" alt="user scissors" class="img-fluid">
                        <h2 class="text-center">Scissors</h2>
                    </a>
                </div>
                <div class="col-12 col-md-4">
                    <a href="?choice=paper">
                        <img src="./images/user-paper.jpg" alt="user paper" class="img-fluid">
                        <h2 class="text-center">Paper</h2>
                    </a>
                </div>
            </div>
        </main>
    
    <!-- SI LE CHOIX A ETE FAIT ON AFFICHE LE RESULTAT -->
    <?php
    else :
    $choices = ["rock","scissors","paper"];
    $rand = rand(0,2);
    $randomChoice = $choices[$rand];



    ?>
        <h1 class="text-center">GAGN&Eacute; ou PAS ?</h1>
        <main class="container-fluid">
            <div class="row align-items-center">
                <div class="col-6">
                    <h2 class="text-center">You</h2>
                    <img src="./images/user-<?php echo $_GET['choice']; ?>.jpg" alt="user rock" class="img-fluid">
                </div>
                <div class="col-6">
                    <h2 class="text-center">Computer</h2>
                    <img src="./images/computer-<?php echo $randomChoice; ?>.jpg" alt="user scissors" class="img-fluid">
                </div>
            </div>
        </main>
        <section class="text-center">
            <a href="index.php">
            <h2>PLAY AGAIN !!!</h2>
            <img src="./images/game.jpg" class="game" alt="ShiFuMi Again !">
            </a>
        </section>
    <?php
    endif;
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>