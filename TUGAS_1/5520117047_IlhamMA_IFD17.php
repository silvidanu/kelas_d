<?php
  function kanguru ($a1,$b1,$a2,$b2){
    $kelinci1 = $a1." ";
    $kelinci2 = $a2." ";
    
    echo "kanguru(".$a1",".$b1",".$a2",".$b1",".$b2")";
    echo "<br>";
    for ($i=0; $i <4; $i++ ){
        $a1 += $b1;
        $a2 += $b2;
        @$kanguru1.= $a1." ";
        @$kanguru2.= $a2." ";

    }
    echo "kanguru1 = " .$kangguru1;
    echo "<br>";
    echo "kanguru2 = " .$kangguru2;
    echo "<br>";
    
    if($a1 == $a2){
        echo "<b> yess </b> <br></br>";
    }else{
        echo "<b> no </b> <br> </br>";
    }
  }
    kanguru(0,3,4,2); 
    kanguru(1,3,5,1);
    kanguru(4,2,1,5);


 ?> 

