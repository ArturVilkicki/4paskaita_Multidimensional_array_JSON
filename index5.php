<!DOCTYPE html>
<html>
<head>
	<title>4 uzduotis Twitter</title>
</head>
<body>

</body>
</html>
<?php
$str = file_get_contents('data5.json');
$dataArray = json_decode($str, true);
//var_dump($dataArray);
foreach ($dataArray as $data) {
	foreach ($data as $item) {
		if (is_array($item)) {
			foreach ($item as $itemas) {
					if (is_array($itemas)) {
						foreach ($itemas as $key) {
								if (is_array($key)) {
									foreach ($key as $pirmas) {
										if (is_array($pirmas)) {
											foreach ($pirmas as $antras) {
												var_dump($antras);
												if (is_string($antras)) {
													echo "<a href='" . $antras.  "'>Twitter</a>";
												}
											}
										}
									}
								}
							
						}
					}
				
			}
		}
	}
}

?>