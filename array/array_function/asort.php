<?php
$arr=array(0=>"brijesh",1=>"rajesh",2=>"sagar",3=>"jeet");
asort($arr);
foreach($arr as $value)
{
    echo "My name is :".$value."<br>";
}

?>