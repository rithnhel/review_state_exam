<?php
require "vendor/autoload.php";
use StateExam\Register;

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];

    $student = new Register;
    $student->form_data($username,$gender,$email);
}