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
//The substr() function returns a part of a string.
//substr(string,start,length)

$str2=substr($str,-1,1).'<br>';  //return the last character of $str
$str1=substr($str,0,5);
echo $str1.'<br>';
//Split the string after 2 character and add a ":" after each split by  chunk_split() Function
echo chunk_split($str,2,":");
//The substr() function returns a part of a string.
//substr(string,start,length)
?>
