<h3>Menentukan apakah kedua kangguru akan berada dilokasi yang sama dengan jumlah lompatan yang sama dengan maksimum lompatan adalah 50 Kali.</h3>
<?php 
	function kangguru($x1, $v1, $x2, $v2) {
        @$k1 .=$x1.",";
        @$k2 .=$x2.",";
        echo "Kangguru (".$x1.",".$v1.",".$x2.",".$v2.")<br/>";
        $hasil='NO';
        $nilai=null;
        $nilai=null;
		for ($i=1; $i <= 50 ; $i++) { 
            

			$x1 += $v1; 
            $x2 += $v2;
            if($hasil=='NO'){
                $k1 .= $x1.",";
                $k2 .= $x2.",";
                if($x1==$x2){
                    $hasil = "YES";
                    $nilai = $x1;
                    $lompat = $i;
                }else{
                    $hasil = "NO";
                }
            }
        }
		echo "Kanguru 1 : <br>".substr($k1,0,-1);
		echo "<br>";
		echo "Kanguru 2 : <br>".substr($k2,0,-1);
        echo "<br>";
        if($hasil=="YES"){
            echo "Output :<br/>";
            echo "<b>".$hasil."</b>,
            Kedua kangguru sama-sama memiliki nilai yang sama pada jumlah lompatan yang sama yaitu nilai <b> $nilai </b> dengan jumlah lompatan sebanyak <b> $lompat </b>.";
        }else{
            echo "Output :<br/>";
            echo "<b>NO</b>";
        }
        echo "<br>------------------------------------------------------------------------------------------------------------------<br><br>";
    }

	kangguru(0,3,4,2);
	kangguru(1,3,15,1);
	kangguru(1,2,5,1);
	kangguru(3,2,6,6);
 ?>