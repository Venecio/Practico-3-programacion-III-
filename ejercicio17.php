<?php

$aries = array(
    'signo' => "aries",
    'inicio' => "21/03",
    'final' => "20/04",
    'elemento' => "fuego"
);
$tauro = array(
    'signo' => "tauro",
    'inicio' => "21/04",
    'final' => "21/05",
    'elemento' => "tierra"
);
$geminis = array(
    'signo' => "geminis",
    'inicio' => "22/05",
    'final' => "21/06",
    'elemento' =>"aire"
);
$cancer = array(
    'signo' => "cancer",
    'inicio' => "22/06",
    'final' => "23/07",
    'elemento' =>"agua"
);
$leo = array(
    'signo' => "leo",
    'inicio' => "24/07",
    'final' => "23/08",
    'elemento' => "fuego"
);
$virgo = array(
    'signo' => "virgo",
    'inicio' => "24/08",
    'final' => "22/09",
    'elemento' =>"tierra"
);
$libra = array(
    'signo' => "libra",
    'inicio' => "23/09",
    'final' => "22/10",
    'elemento' =>"aire"
);
$escorpio = array(
    'signo' => "escorpio",
    'inicio' => "23/10",
    'final' => "22/11",
    'elemento' =>"agua"
);
$sagitario = array(
    'signo' => "sagitario",
    'inicio' => "23/11",
    'final' => "21/12",
    'elemento' =>"fuego"
);
$capricornio = array(
    'signo' => "capricornio",
    'inicio' => "22/12",
    'final' => "19/01",
    'elemento' =>"tierra"
);
$acuario = array(
    'signo' => "acuario",
    'inicio' => "20/01",
    'final' => "19/02",
    'elemento' =>"aire"
);
$piscis = array(
    'signo' => "piscis",
    'inicio' => "20/02",
    'final' => "20/03",
    'elemento' =>"agua"
);
$signo=[
        "aries"=>$aries,
        "tauro"=>$tauro,
        "geminis"=>$geminis,
        "cancer"=>$cancer,
        "leo"=>$leo,
        "virgo"=>$virgo,
        "libra"=>$libra,
        "escorpio"=>$escorpio,
        "sagitario"=>$sagitario,
        "capricornio"=>$capricornio,
        "acuario"=>$acuario,
        "piscis"=>$piscis,
];
print_r($signo);