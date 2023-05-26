<?php
   $dta["NIM"] ="1122334455";
   $dta["NAMA"] ="Desy Bugis";
   $dta["JKEL"] ="P";
   $dta["JURUSAN"] ="TI-PAR";
   $dta["ASAL"] ="Labuan Bajo";
   $dta["Hobi"] ="Nyanyi sambil menulis";
   
   header("content-type: application/json; charset=utf-8");
   echo json_encode($dta);