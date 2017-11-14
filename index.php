<?php

include 'blog/model/connect.php';

echo "<table>";

$sql=	"SELECT * FROM belgisch_bier";
$result = mysqli_query($conn, $sql);

while (list($id,$naam,$brouwer,$type,$gisting,$kleur,$alcoholperc)=mysqli_fetch_row($result)){
	
	echo	"<tr><td>$naam</td>
            <td>$brouwer</td>
			<td>$type</td>
			<td>$kleur</td>
			</tr>";
}
ALALALALALALALALA
	echo "</table>";
?>