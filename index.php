<?php

use Delacruz\Gs\Models\StudentModel;

require 'vendor/autoload.php';

$student = new StudentModel;

//$student->name="John doe";
//$student->course="BSIT";
//$student->year_level=4;
//$student-sectionn;

$student = StudentModel->read();
print_r($student);


