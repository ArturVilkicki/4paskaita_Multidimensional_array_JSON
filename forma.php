<?php
$message = '';
$error = '';
if (isset($_POST["submit"])) {
	if (empty($_POST["name"])) {
		$error = 'Enter name';
	} elseif (empty($_POST["surname"])) {
	} elseif (empty($_POST["gender"])) {
		$error = 'Enter Gender';
	} else {
		if (file_exists('formos.json')) {
			$currentData = file_get_contents('formos.json');
			$arrayData = json_decode($currentData,true);
			$extra = array(
				'name'=>$_POST['name'],
				'surname'=>$_POST['surname'],
				'gender'=>$_POST['gender']
			);
			$arrayData[] = $extra;
			$finalData = json_encode($arrayData);
			if (file_put_contents('formos.json', $finalData)) {
				$message = 'File append success';
			}
		} else {
			$error = 'JSON file not exists';
		}
	}
}

?>



<!DOCTYPE html>
<html>
<head>
	<title>Formos irasymas i JSON file</title>
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