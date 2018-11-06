<!DOCTYPE html>
<html>
<head>
	<title>3 uzduotis youtube.YouTube JSON Example</title>
	
<script src="https://apis.google.com/js/client.js?onload=onLoad" type="text/javascript"></script>
</head>
<body>
	<h1>YouTube Search Results</h1>
	<?php
	//echo "<div>". $dataArray ."</div>";


	?>
</body>
</html>
<?php
	$str = file_get_contents('data4.json');
	$dataArray = json_decode($str,true);
	var_dump($dataArray);
	foreach ($dataArray as $data) {
		foreach ($data as $item) {
			if (is_array($item)) {
				foreach ($item as $vaizdo) {
					if (is_array($vaizdo)) {
						foreach ($vaizdo as $vaizdoo) {
							if (is_array($vaizdoo)) {
								foreach ($vaizdoo as $vaizdooo) {
									var_dump($vaizdooo);
									//if (is_string($vaizdooo)) {
										//echo "<iframe width=420 height=315 id=" . $vaizdooo. "></iframe>";
									//}
								}
							}
						}
					}
				}
			}
		}
	}
	


?>