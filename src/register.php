<?php
namespace StateExam;

class Register {
    public $firstname = "";
    public $gender = "";
    public $email = "";

    public function form_data($fname, $gender, $email)
    {
        echo $this->firstname = $fname;
        echo "</br>";
        echo $this->gender = $gender;
        echo "</br>";
        echo $this->email = $email;
        echo "</br>";
    }
}
