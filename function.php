<?php

function isEven($a){
    if ($a % 2 == 0){
        echo true;
    }
    echo false;
}
 function facTorial($n){
    $r=1;
    for ($i=$n;$i>1;--$i){
        $r *=$i;
    } return $r;
 }
 function serve($a="1 cup",$b=" Tea"){
    echo "{$a} of {$b} has/have been served.";
 }
function sum($a,$b,$c):int {
    return $a+$b+$c;
}
function add(int...$n){
    $r=0;
    for($i=0;$i<count($n);$i++){
        $r+=$n[$i];

    }
    return $r;
}
function doTaskA(){
    echo "A Task Done.";
}
function doTaskB(){
    echo "B Task Done.";
}
function doTaskC(){
    echo "C Task Done.";
}
function doTaskD(){
    echo "D Task Done.";
}
function doTaskE(){
    echo "E Task Done.";
}

function doLargeTask(){
    doTaskA();
    doTaskB();
    doTaskC();
    doTaskD();
    doTaskE();

}
function cont($count,$end,$stepping){
    if ($count>$end){
        return;
    }
    echo $count.PHP_EOL;
    $count+=$stepping;
    cont($count,$end,$stepping);
}

function fibbo($st,$nd,$en){
    static $start;
    $start=$start ?? 1;
    if ($st>$en){
        return;
    }
    $st++;
    echo $st." ";
    $c=$st+$nd;
    $st=$nd;
    $nd=$c;
    fibbo($st,$nd,$en);

}
//$n="sayan";
function exam(){
    global $n;
     $n="say";

    //echo $n;
    echo $GLOBALS['n'];

}
//exam();
function doEx(){
    static $i;
    $i=$i ?? 0;
    $i++;
    echo $i;
    echo "\n";
}
function doSomething(){
    static $i;
    $i=$i ?? 0;
    $i++;
    echo $i;
    echo "\n";
}

?>