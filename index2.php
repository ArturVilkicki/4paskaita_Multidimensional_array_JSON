<!DOCTYPE html>
<html>
<head>
    <title>Spalvos</title>
</head>
<body>
    
</body>
</html>




<?php
$str = file_get_contents('data.json');
$dataArray = json_decode($str, true);
foreach ($dataArray as $data) {
    foreach ($data as $item) {
        if (is_array($item)) {
            foreach ($item as $value) {
               if (is_array($value)) {
                   foreach ($value as $colors) {
                       if (is_array($colors)) {
                           foreach ($colors as $spalva) {
                               if (is_string($spalva)) {
                                   echo "<div style = 'border: 1px solid black; background-color: " . $spalva . ";float: left;font-size: 100px;clear: both;'>A</div>";
                               } else {
                                  var_dump($spalva);
                               }
                               
                           }
                       }
                   }
               }
            }
        }
    }
    
}


