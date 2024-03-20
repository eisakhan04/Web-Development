<?php

echo "with Function: <br> ";
//Binary search program
  function binarySearch(Array $arr , $num){
       //if array does not has elements
       if (count($arr) == 0 ){
        return false;
       }
        $low = 0;
        $high = count($arr)-1;
         
        while($low <= $high){
            $mid = floor(($low + $high)/2);

            // if middle elements matches the number 
            if ($num  == $arr[$mid]){
                return true;

            }

            if($num< $arr[$mid] ) {
                // search element in left
                $high = $mid - 1;

          }else{
            // search element in right side 
            $low = $mid + 1;
        
            }
        }
      // if we reach here that means number does not exist
       return false;
      
    
    }

 $num_arr = array(1 , 2 , 4 , 6 , 9 , 12);
 $num_to_find = 67;

  if (binarySearch($num_arr, $num_to_find)) {
   echo $num_to_find , " number is present in the list ";
  }
  else{
    echo $num_to_find , " Number is not  present in the list";
  }








  // withOut function 
echo "<br>";
echo "with out Function :<br>";
// Binary search program
$num_arr = array(1, 2, 4, 6, 9, 12);
$num_to_find = 67;

// If array does not have elements
if (count($num_arr) == 0) {
    echo "Array is empty.";
} else {
    $low = 0;
    $high = count($num_arr) - 1;
    $found = false;

    while ($low <= $high) {
        $mid = floor(($low + $high) / 2);

        // If middle element matches the number 
        if ($num_to_find == $num_arr[$mid]) {
            $found = true;
            break;
        }

        if ($num_to_find < $num_arr[$mid]) {
            // Search element in left
            $high = $mid - 1;
        } else {
            // Search element in right side 
            $low = $mid + 1;
        }
    }

    // Check if number is found or not
    if ($found) {
        echo $num_to_find . " number is present in the list.";
    } else {
        echo $num_to_find . " number is not present in the list.";
    }
}
?>


