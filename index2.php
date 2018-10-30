<?php
$str = file_get_contents('data.json');
$dataArray = json_decode($str, true);
//echo $str;
//echo "<br>";
//$jsonstr = json_decode($str, true);
//print_r($jsonstr);
// var_dump(json_decode($str));
// var_dump($dataArray);

foreach($dataArray as $mydata)
    {
        // var_dump($mydata);
        // echo $mydata->header . "\n"; 

         foreach($mydata as $item)
         {
            //is_array
            if(is_array($item)){
                    foreach($item as $values)
                {
                    var_dump($values);
                }
            }
            
         }
         
         
    }
function funkcija($dataArray){
    if(is_array($dataArray)){
       foreach ($item as $values) {
            var_dump($values);
        } 
    }
    
}  

