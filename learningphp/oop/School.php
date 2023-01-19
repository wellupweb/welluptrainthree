<?php 
    class School{
        public $school_name = "Wellup School";

        public function organize(){
            echo "We are the people of ". $this->school_name;
        }
    }

    class Teacher extends School{
     
        public $teacher_name = "Niloy Alam";

        public function beat(){
            echo $this->teacher_name. " Sir is beating Mahabub Ullah from" . $this->school_name ;
        }

        public function organize(){
            echo "The people of ". $this->school_name;
        }
    }
    
    $school = new School();
    $school->organize();

    echo "<br>";

    $teacher = new Teacher();
    $teacher->organize();






























    // $school = new School();
    // echo $school->school_name;
    // echo "<br>";
    // $school->organize();
    // echo "<br>";

    // $teacher = new Teacher();
    // echo $teacher->teacher_name;
    // echo "<br>";

    // $teacher->beat();
    // echo "<br>";

    // echo $teacher->school_name;
    // echo "<br>";

    // $teacher->organize();
    // echo "<br>";




?>