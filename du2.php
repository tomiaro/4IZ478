<?php
if (!empty($_POST)) {
    $err = false;

    if (empty($_POST["firstname"])) {
        $err = true;
    } 

    if (empty($_POST["lastname"])) {
        $err = true;
    } 

    if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $err = true;
    } 
    
    if ($_POST["year"] > date("Y") || $_POST["year"] < date("Y") - 150) {
        $err = true;
    }
    
    if ($err == false) {
    	foreach ($_POST as $varPost) {
    		$varPost = checkString($varPost);
    	}
    }


}

    function checkString($data)
    {
        $data = trim($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    ?>


<!DOCTYPE html>
<html>
<head>
	<title>DU2</title>
	<meta charset="utf-8">
</head>
<body>
	<form method="post">
		Jméno: <br>
		<input  type="text" name="firstname" required><br>
		Příjmení <br>
		<input type="text" name="lastname" required><br>
		Email<br>
		<input type="Email" name="email" required><br>
		Datum narození <br>
		<input type="number" name="year" required><br>
		<br>
		<input type="submit">
	</form>
	<?php
if (!empty($_POST)) {
        if ($err == true) {
            echo "<p>Formulář byl chybně vyplněn.</p>";
        } else {

            ?>
   <br>
   <table>
  	<thead>
  		<tr>
  			<th>Jméno</th>
  			<th>Přijmení</th>
  			<th>Email</th>
  			<th>Datum narozeni</th>
  		</tr>
  	</thead>
  	<tbody>
  		<tr>
  			<th><?php echo $_POST["firstname"]; ?></th>
  			<th><?php echo $_POST["lastname"]; ?></th>
  			<th><?php echo $_POST["email"]; ?></th>
  			<th><?php echo $_POST["year"]; ?></th>
  		</tr>
  	</tbody>
  </table>

<?php
}
    }
    ?>
</body>
</html>
