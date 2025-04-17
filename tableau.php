<?php

$amor = 0;
if (isset($_POST['env'])) {

    $nom = $_POST['nom'];
    $pre = $_POST['prenom'];
    $adr = $_POST['adress'];
    $cp = $_POST['codepostal'];

    if ($nom!="" && $pre !="" && $adr!="" && $cp!="") {
        echo "
<table border=2px>
<thead>
<tr>
 <th>nom</th>
 <th>prenom</th>
 <th>adresse</th>
 <th>code postal</th>
</tr>
</thead>
<tbody>
<tr>
        <td>$nom</td>
        <td>$pre</td>
        <td>$adr</th>
        <td>$cp</<td>
        </tr>
</tbody>
</table>
";
    } else {
       ?>
       <script src="alt.js"></script>
       <?php
       header('refresh:1;formulaire.php');
    }
} else {
    die("pas de valeur");
}
?>