<?php


$months=[
1 => 'Janvier',
2 => 'Février',
3 => 'Mars',
4 => 'Avril',
5 => 'Mai',
6 => 'Juin',
7 => 'Juillet',
8 => 'Août',
9 => 'Septembre',
10 => 'Octobre',
11 => 'Novembre',
12 => 'Décembre'
];


$day = [
    1 => 'Lundi',
    2 => 'Mardi',
    3 => 'Mercredi',
    4 => 'Jeudi',
    5 => 'Vendredi',
    6 => 'Samedi',
    7 => 'Dimanche'
];



if(isset($_GET['year'])){
    $year = $_GET['year'];
}else{
    $year = date('Y');
}



if(isset($_GET['month'])){
    $monthNumber = $_GET['month'];
}else{
    $monthNumber = date('n');
};



$monthLetters = $months[$monthNumber];
$totalDaysinMonth = cal_days_in_month(CAL_GREGORIAN, $monthNumber, $year);


?>