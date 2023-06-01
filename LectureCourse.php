<?php

class LectureCourse extends Course implements Registrable
{
    protected array $listLectureStudents;

    public function registerStudent(Students $student)
    {
        $this->listLectureStudents[] = $student;
    }

    public function cancelRegistration(string $name)
    {
        foreach ($this->listLectureStudents as $key=>$student) {
            if ($student->getName() == $name) {
                unset($this->listLectureStudents[$key]);
            }
        }
    }

    public function getListLectureStudents(): array
    {
        return $this->listLectureStudents;
    }

    public function printRegisteredStudent()
    {
        echo '<h3>Список студентов на лекцию</h3>';
        foreach ($this->listLectureStudents as $student) {

            echo 'Имя студента: ' . $student->getName() . '<br>'
            . 'Фамимлия студента: ' . $student->getSurname() . '<br>'
                . 'Возраст: ' . $student->getAge() . '<br>';
            echo '-------------------------------<br>';
        }
    }

}