<?php

class LabCourse extends Course implements Registrable
{
    protected array $listLabStudents;

    public function registerStudent(Students $student)
    {
        $this->listLabStudents[] = $student;
    }

    public function cancelRegistration(string $name)
    {
        foreach ($this->listLabStudents as $key=>$student) {
            if ($student->getName() == $name) {
                unset($this->listLabStudents[$key]);
            }
        }
    }

    public function getListLabStudents(): array
    {
        return $this->listLabStudents;
    }

    public function printRegisteredStudent()
    {
        echo '<h3>Список студентов на лабораторную</h3>';
        foreach ($this->listLabStudents as $student) {

            echo 'Имя студента: ' . $student->getName() . '<br>'
                . 'Фамимлия студента: ' . $student->getSurname() . '<br>'
                . 'Возраст: ' . $student->getAge() . '<br>';
            echo '-------------------------------<br>';
        }
    }
}