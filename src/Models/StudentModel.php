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
    public string $Gender;
    public string $Date_Created;

    public function __construct() 
    {
        parent::__construct();
        $this->id = 0;
        $this->name = "";
        $this->course = "";
        $this->year_level = 0;
        $this->section = "";
        $this->Gender = "";
        $this->Date_Created="";
    }

    public function create() {
        //cReate data
        $query = $this->conn->prepare("INSERT INTO `students`(`ID`, `Name`, `Course`, `year_level`, `section`, `Gender`, `Date_Created`) 
        VALUES('$this->id','$this->name','$this->course','$this->year_level','$this->section', '$this->Gender', '$this->Date_Created')");
        if($query->execute()){
            echo "student Created!";
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
    public function update($id) {
        $this->id=$id;
         $sql = "UPDATE `students` SET Name = '$this->name', Course = '$this->course', 
         year_level = $this->year_level, section = '$this->section', Gender = '$this->Gender', Date_Created = '$this->Date_Created' WHERE ID = $this->id";

    if ($this->conn->query($sql)) {
        echo "Student updated!";
    } else {
        echo "Update failed: ". $this->conn->error;
    }

    }
    public function delete($id) {
        $this->id=$id;
        $sql = "DELETE FROM `students` WHERE ID = $this->id";
        if ($this->conn->query($sql)) {
            echo "Student Deleted successfuly!";
        } else {
            echo "Delete Student failed!". $this->conn->error;
        }
        
    }


}

?>