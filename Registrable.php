<?php

interface Registrable
{
    public function registerStudent(Students $student);
    public function cancelRegistration(string $name);
}