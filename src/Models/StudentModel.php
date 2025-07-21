<?php

namespace Delacruz\Gs\Models;

use Delacruz\Gs\Core\Crud;
use Delacruz\Gs\Core\Database;



class StudentModel extends Database implements Crud {
    public int $id;
    public string $name;
    public string $course;
    public int $year_level;
    public string $section;

    public function __construct() 
    {
        parent::__construct();
        $this->id = 0;
        $this->name = "";
        $this->course = "";
        $this->year_level = 0;
        $this->section = "";
    }

    public function create() {
        //cReate data
        $query = $this->conn->prepare("INSERT INTO `students`(`ID`, `Name`, `Course`, `year_level`, `section`) VALUES('$this->id','$this->name','$this->course','$this->year_level','$this->section')");
        if($query->execute()){
            echo "student inserted!";
        }

    }
    public function read() {
        try {
            //code
            $sql = "SELECT * FROM students";
            $results = $this->conn->query($sql);
            return $results->fetch_all(MYSQLI_ASSOC);
        } catch (\Throwable $th) {
            //throw $th;
            echo $th->getMessage();
        }

    }
    public function update() {

    }
    public function delete() {
        
    }


}

?>