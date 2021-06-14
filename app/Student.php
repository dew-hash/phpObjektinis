<?php
namespace DemoApp;

class Student extends User{
    private $school;

    public function __construct($name, $email, $role, $school){
            $this->name = $name;
            $this->email = $email;
            $this->role = $role;
            $this->school = $school;
    }

    public function getAll(){
        return [
            $this->name,
            $this->email,
            $this->role,
            $this->level,
            $this->school
        ];
    }

    public function setLevel($level){
        $this->level = $level;
    }

}