<?php

use Delacruz\Gs\Models\StudentModel;

require 'vendor/autoload.php';

$student = new StudentModel;



$student->name="Bibong";
$student->course="BSIT";
$student->year_level=2;
$student->section="C";
$student->Gender= "Male";
$student->Date_Created= "September 4 2025";

$student->update(1,2,6,7);





