<?php
//indexing array
$colors = ["red" , "green", "blue"];
foreach($colors as $value)
{
    echo $value ."<br>";

}

/// associative array
$colors = [ "red"=>34,
            "green"=>77,
            "blue"=>87,
              ];
foreach($colors as $key=> $value)
{
    echo $key." = ". $value ."<br>";

}

?>