<?php

try {
    $pdo = new PDO("mysql:host=localhost;dbname=data", 'root', '');
} catch (PDOException $err) {
    die($err->getMessage());
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead
            <tr>
            <th>DATA</th>
            <th>D0</th>
            <th>D1</th>
            <th>D2</th>
            <th>D3</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = 'select * from dat';
            $result = $pdo->query($query);
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                echo "
             <tr>
             <td>" . $row['ID'] . "</td>
             <td>" . $row['d0'] . "</td>
             <td id=d1>" . $row['d1'] . "</td>
             <td id=d2>" . $row['d2'] . "</td>
             <td id=d3>" . $row['d3'] . "</td>
             ";
             ?>
             <script src ="clacule.js"></script>
             <?php
             echo"
             </tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>