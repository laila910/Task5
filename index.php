<?php

$array = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki",
               "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", 
               "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;
$SortByDesc = arsort($array);
//$SortingByAscending = krsort($array);

foreach( $array as $key => $Value){
    echo'The capital Of The Countrty'.'  '.$key.'is'.'  '.$Value .'<br>';

}

$str = '672319';
//Split the string after 2 character and add a ":" after each split by  chunk_split() Function
echo chunk_split($str,2,":");
?>
