<?php
 if(isset($_POST['envoi'])){
    $adre= $_POST['Email'];

    echo" EMAIL :".$adre;
    echo  $_POST['servername'].$_SERVER['SERVER_NAME'];
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="row  justify-content-center">
        <div class="col-4">
            <dl class="row">
                <dt class="col-4">Diffinition</dt>
                <dd class="col-8"><p class="lead">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo nobis
                     tenetur nemo iure ratione incidunt molestiae beatae. 
                    Quisquam nemo delectus ex libero eos tempora temporibus quos, aspernatur odit sapiente? Sequi.
                </p></dd>
            </dl>
        </div>
        <div class="col-4">
            <form action="#" role="form">
                <div class="bm-3">
                    <label for="nom" class="form-label">Nom</label>
                </div>
                <div class="bm-3">
                    <input type="text" class="form-control" name="nom" placeholder="nom">
                </div>
                <div class="bm-3">
                    <label for="prénom" class="form-label">Prénom</label>
                </div>
                <div class="bm-3">
                    <input type="text" class="form-control" name="Prénom" placeholder="prénom">
                </div>
                <div class="bm-3">
                    <label for="Email" class="form-label">Email</label>
                </div>
                <div class="bm-3">
                    <input type="email" class="form-control" name="email" placeholder="Email">
                </div>
                <div class="bm-3">
                    <label for="password" class="form-label">Mot De Passe</label>
                </div>
                <div class="bm-3">
                    <input type="password" class="form-control" name="password" placeholder="Mot De Passe">
                </div>
                <button class="btn btn-primary">Envoyer</button>
            </form>
            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                 Ab atque exercitationem autem repudiandae consequatur fugit sint fuga 
                sed ipsa incidunt, eum a. Quae, similique harum error necessitatibus repellat reprehenderit nemo?</p>
        </div>
    </div>
    <script src ="jquery/JQuery 3.7.1.js"></script>
</body>
</html>