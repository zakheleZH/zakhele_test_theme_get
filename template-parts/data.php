<?php
session_start(); // starting a section


$user =  $_SESSION['user_name'];
$years_experience =  $_SESSION['experience'];

echo " username is $user user is having $years_experience years of experience";
?>