<!DOCTYPE html>
<html>
<head>
	<title>6 uzduotis Wordpress</title>
</head>
<body>

</body>
</html>
<?php
$str = file_get_contents('data7.json');
$dataArray = json_decode($str,true);
//var_dump($dataArray);
foreach ($dataArray as $data) {
	if (is_array($data)) {
		foreach ($data as $items) {
			var_dump($items);
			echo "<a href='" . $items.  "'>Wordpress</a>";
		}
	
	}
}

?>