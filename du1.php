<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>DU 1</title>
</head>
<body>
<?php
$min = 1;
$max = 10;
for ($i = $min; $i <= $max; $i++) {
    if ($i % 2 == 0) {
        echo '<p>'.$i.'</p>';
    }
}

?>

<table>
	<tbody>
	<?php
$radky   = 5;
$sloupce = 5;
for ($i = 0; $i < $radky; $i++) {
    echo "<tr>";
    for ($j = 0; $j < $radky; $j++) {
        echo "<td>tabulka</td>";
    }
    echo "</tr>";
}
?>

	</tbody>
</table>


</body >
</html >
