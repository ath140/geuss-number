<?php
echo"
<h3>Reviser votre table de multiplication</h3>
<table border=2px>
<thead>
<tr>
<th style=background-color:yellow>X</th>
";
for($i=1;$i<10;$i++)
echo"
<th style=background-color:yellow>$i</th>";
echo"
</tr>
</thead>
<tbody >
";
for($i=1;$i<10;$i++){
echo"<tr>
<td style=background-color:yellow>$i</td>
";
for($j=1;$j<10;$j++){
    echo"
    <td style=background-color:gray>".$i*$j."</td>";
}
echo"
</tr>";}
echo"
</tbody>
</table>
"
 ?>
