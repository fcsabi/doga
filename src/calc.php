<?php

echo file_get_contents('templates/head.html');



$page= file_get_contents('templates/calc.html');

$aside=$_GET('aside');
$bside=$_GET('bside');
$cside=$_GET('cside');
$dside=$_GET('dside');

function calcArea($aside,$bside,$cside,$dside){
    $s=($aside+$bside+$cside+$dside)/2;
    $area=sqrt(
        ($s-$aside)*
        ($s-$bside)*
        ($s-$cside)*
        ($s-$dside)
    );
    return $area;
}
$area=calcArea($aside,$bside,$cside,$dside);
$page=str_replace('{{ resutl }}' ,$aside,$page);
echo $page;

echo file_get_contents('templates/foot.html');