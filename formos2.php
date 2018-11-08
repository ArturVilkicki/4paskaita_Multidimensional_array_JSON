<?php

$message = '';
$error = '';
if (isset($_POST["submit"])) {
	if (empty($_POST["name"])) {
		$error = 'Please enter name';
	} elseif (empty($_POST["surname"])) {
		$error = 'Please enter surname';
	} elseif (empty($_POST["gender"])) {
		$error = 'Please enter surname';
	} else {
		if (file_exists('formos2.json')) {
			$currentData = file_get_contents('formos2.json');
			$arrayData = json_decode($currentData);
			$extraData = array (
				'name' => $_POST['name'],
				'surname' => $_POST['surname'],
				'gender' => $_POST['gender']
			);
			$arrayData[] = $extraData;
			$finalData = json_encode($arrayData);
			if (file_put_contents('formos2.json', $finalData)) {
				$message = 'File put contents successfully';
			}
		} else {
			$error = 'File not exists!!!!';
		}
	}
}

?>



<!DOCTYPE html>
<html>
<head>
	<title>forma i json</title>
</head>
<body>
	<form method="POST">
		<?php
		if (isset($error)) {
			echo $error;
		}
		?>
		<label>Name</label>
		<input type="text" name="name"><br />

		<label>Surname</label>
		<input type="text" name="surname"><br />

		<label>Gender</label>
		<input type="text" name="gender"><br />

		<input type="submit" name="submit">
		<?php

		if (isset($message)) {
			echo $message;
		}

		?>
	</form>
</body>
</html>