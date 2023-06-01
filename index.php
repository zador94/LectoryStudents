<?php
include 'splAutoload.php';

$webDevelopment = new LectureCourse('Web Development', 'John Smith', 'Mondays, Wednesdays, Fridays');
$databaseManagement = new LabCourse('Database Management', 'Alice Johnson', 'Tuesdays, Thursdays');

$student1 = new Students('Alex', 'Jonathan', 24);
$student2 = new Students('Vasya', 'Ivanov', 25);
$student3 = new Students('Andrey', 'Karpov', 26);

$webDevelopment->registerStudent($student1);
$webDevelopment->registerStudent($student2);

$databaseManagement->registerStudent($student3);

$webDevelopment->cancelRegistration('Alex');

$webDevelopment->printRegisteredStudent();
$databaseManagement->printRegisteredStudent();

