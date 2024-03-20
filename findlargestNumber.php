

<?php
   
$array =[34,55, 67, 88,8,9,12,45];
$large = 0;
$x = 0;

while($x <  count($array)) {
    if ($array[$x] > $large) {
        $large = $array[$x];

    }
     $x++;
    }
    echo "largest number: ". $large ."<br>";
    

// second largest number 

    $array =[34 ,55, 67, 88,8,9,12,45];
$large = 0;
$x = 0;
$Slarge = 0;

while($x <  count($array)) {
    if ($array[$x] > $large)
     {   

        $Slarge = $large;
        $large = $array[$x];

    }
    else if($array[$x] > $Slarge && $array[$x]!=$large)
    {
        $Slarge = $array[$x];
    }
     $x++;
    }
    echo "largest number: ". $large ."<br>";
    echo "Second largest number: ". $Slarge ."<br>";





     // third  largest number 

    $array =[34 ,55 , 607,67, 88,8,9,12,45];
    $large = 0;
    $x = 0;
    $Slarge = 0;
    $Tlarge =0;
    
    while($x <  count($array)) {
        if ($array[$x] > $large)
         {   
            $Tlarge = $Slarge;
            $Slarge = $large;
            $large = $array[$x];
    
        }
        else if($array[$x] > $Slarge && $array[$x] !=$large)
        {
            $Slarge = $array[$x];
        } 
        elseif($array[$x] >$Tlarge  )
        {
                $Tlarge = $array[$x];
        }
         $x++;
        }
        echo "largest number: ". $large ."<br>";
        echo "Second largest number: ". $Slarge."<br>" ;
        echo "third  largest number: ". $Tlarge ;


?>