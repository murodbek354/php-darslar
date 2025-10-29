<?php
function Hello(){
    echo "Hello world! \n";
}
Hello();
Hello();
Hello();
Hello();
 echo "\n";
 function yigindi(){
    $summa = 0;
    for( $i = 1; $i <= 10; $i++){
        $summa += $i;
    }
     echo "yig'indi: $summa \n";
 }
 yigindi();
 yigindi();
 echo "\n";
 function ikkisonniqoshish($birinchi_son, $ikkinchi_son){
    echo $birinchi_son + $ikkinchi_son;
 }
 ikkiSonniqoshish(52, 13);
?>