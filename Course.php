<?php

abstract class Course
{


    public function __construct(protected string $nameCourse, protected string $nameTeacher, protected string $daysOfClasses)
    {
    }

    public function getNameCourse(): string
    {
        return $this->nameCourse;
    }


    public function setNameCourse(string $nameCourse): void
    {
        $this->nameCourse = $nameCourse;
    }


    public function getNameTeacher(): string
    {
        return $this->nameTeacher;
    }


    public function setNameTeacher(string $nameTeacher): void
    {
        $this->nameTeacher = $nameTeacher;
    }


    public function getDaysOfClasses(): string
    {
        return $this->daysOfClasses;
    }


    public function setDaysOfClasses(string $daysOfClasses): void
    {
        $this->daysOfClasses = $daysOfClasses;
    }


}