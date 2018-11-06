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
//echo $str;
//echo "<br>";
//$jsonstr = json_decode($str, true);
//print_r($jsonstr);
// var_dump(json_decode($str));
// var_dump($dataArray);
/*
foreach($dataArray as $mydata)
    {
        //var_dump($mydata);
        // echo $mydata->header . "\n"; 

         foreach($mydata as $item)
        {
            
            if(is_array($item)){
                    foreach($item as $values)
                {
                   var_dump($values);
                }
           }
            
         }
         
         
    }
    */
    /*
function funkcija($dataArray){
       foreach ($dataArray as $data) {
            foreach ($data as $item) {
                if(is_array($item)){
                    foreach ($item as $values) {
                        var_dump($values);
                    }
                }
            }
            
        } 
    
    
}
funkcija($dataArray);
*/
function funkcija2($dataArray){
    foreach ($dataArray as $data1) {
        foreach ($data1 as $colors) {
            if(is_array($colors)){
                foreach ($colors as $values) {
                    var_dump($values);
                }
            }
        }
    }
}
funkcija2($dataArray);  

