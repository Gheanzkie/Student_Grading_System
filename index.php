<?php

use Delacruz\Gs\Models\StudentModel;

require 'vendor/autoload.php';

$student1 = new StudentModel(12345, "Ghean", "BSIT", 1);
var_dump($student1);
