<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=unite", 'root', '');

    $query = 'select * from access';
    $result = $pdo->query($query);
} catch (PDOException $err) {
    die($err->getMessage());
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
    <h1 class="h1">Base De Données</h1>
    <table class="table table-bordered table-hover">
        <tr>
            <th>Email</th>
            <th>Password</th>
            <th>service</th>
            <th>role</th>
        </tr>
        <tbody>
            <?php
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                echo "
            <tr>
                <td>" . $row['email'] . "</td>
                <td>" . $row['password'] . "</td>
                <td>" . $row['service'] . "</td>
                <td>" . $row['role'] . "</td>
            </tr>";
            }
            ?>
        </tbody>
    </table>
    <script src="alt.js"></script>
    <script src="jquery/JQuery 3.7.1.js"></script>
</body>

</html>