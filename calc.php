<?php 
$summn-1 = $_POST['summ'];
$summadd = $_POST['summadd'];
$percent=10%;
$daysn = $_POST['datepicker'];
$daysy = 365;
$summn = $summn-1 + ($summn-1 + $summadd)$daysn($percent / $daysy)
echo json_encode(summn);
?>