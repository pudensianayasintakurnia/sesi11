<?php
$dta[0]["NIM"] ="1122334455";
$dta[0]["NAMA"] ="Desy Bugis";
$dta[0]["JKEL"] ="P";
$dta[0]["JURUSAN"] ="TI-PAR";
$dta[0]["ASAL"] ="Labuan Bajo";
$dta[0]["Hobi"] ="Nyanyi sambil menulis";

$dta[1]["NIM"] ="2201010737";
$dta[1]["NAMA"] ="Umi nirwana";
$dta[1]["JKEL"] ="P";
$dta[1]["JURUSAN"] ="TI-PAR";
$dta[1]["ASAL"] ="Bima";
$dta[1]["Hobi"] ="menulis sambil menyanyi";

$dta[2]["NIM"] ="2201010736";
$dta[2]["NAMA"] ="nadia febrian";
$dta[2]["JKEL"] ="P";
$dta[2]["JURUSAN"] ="TI-PAR";
$dta[2]["ASAL"] ="lombok";
$dta[2]["Hobi"] ="menyanyi";
   
header("content-type: application/json; charset=utf-8");
echo json_encode($dta);