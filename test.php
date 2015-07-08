<?php
$str = "This___is___a___string";
$words = explode("___", $str);
$spaces=array();
$others=array();
foreach($words as $word)
{

echo$word."</br>";

}

?>