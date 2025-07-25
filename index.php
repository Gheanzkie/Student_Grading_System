<?php

use Delacruz\Gs\Models\StudentModel;

require 'vendor/autoload.php';

$student = new StudentModel;



//$student->id=1235;
//$student->name="Dirk";
//$student->course="BSIT";
//$student->year_level=1;
//$student->section="C";


$gwapo_ko= $student->read();
print_r($gwapo_ko);




