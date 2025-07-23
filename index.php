<?php

use Delacruz\Gs\Models\StudentModel;

require 'vendor/autoload.php';

$student = new StudentModel;

//$student->name="John doe";
//$student->course="BSIT";
//$student->year_level=4;
//$student->section="C";

$student->delete(3);


