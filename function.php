<?php
function sum($math , $e, $sc)
{
    $s = $math + $e +$sc;
    return $s;

}
function precentage($st)
{
    $opr = $st / 3;
    echo $opr . "%";
}


$total = sum(33 , 45 , 7);
echo "The total is :. $total.<br>" ;
precentage($total);
?>