<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <title>Document</title>
</head>

<body style="background-color:black">
    <style>
        .number,
        .egge,
        .correct,
        .titre,
        .choose,
        .again ,
        .btn{
            font-family: "Press Start 2P", system-ui;
            font-weight: 100;
            font-style: normal;
        }
        hr{
            color:white;
        }
    </style>
    <header>
        <h1 class="titre" style="text-align:center;color:white;font-size: 30px;">NUMBER GUESS</h1>
    </header>
    <br><br>
    <div class="row">
        <div class="col-6">
            <button class="again" style="border-radius: 0;color:black;background-color:white;color:blacks;width: 90px;height: 70px;">Agin</button>
        </div>
        <div class="col-6">
            <h4 class="choose" style="color:white;text-align: center;">Between 0 and 10</h4>
        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="col btn  justified-content-center" >
    <button class="num" style="color:black;background-color:white;font-size: 30px;width: 90px;height:70px;">?</button>
    </div>
    </div>
    <br><br><br>
    <div class="row">
        <div class="col-6">
            <input type="text" class="number" style="border:3px solid white;background-color:black;color:white;
        font-size:20px;width:90px;height:70px;text-align:center;">
            <button class="egge" style="border-radius: 0;color:black;background-color:white;color:blacks;width: 90px;height: 60px;">Event</button>
        </div>
        <div class="col-6">
            <h5 class="correct" style="color:white;font-size:20px;text-align: center;">quelque minute.....</h5>
            <h5 class="scoore" style="color:white;font-size:20px;text-align: center;">scoore is :</h5>
        </div>
    </div>
    <script src="clacule.js"></script>
    <script src="jquery/JQuery 3.7.1.js"></script>
</body>

</html>