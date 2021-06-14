<?php
namespace DemoApp;

class Teacher extends User{
    private $skills;
    private $subject;

    public function __construct($name, $email, $role, $skills, $subject){
        $this->name = $name;
        $this->email = $email;
        $this->role = $role;
        $this->skills = $skills;
        $this->subject = $subject;
    }

    public function getAll(){
        return [
            $this->name,
            $this->email,
            $this->role,
            $this->level,
            $this->skills,
            $this->subject
        ];
    }

    public function setLevel($level){
        $this->level = $level;
    }

    public function getLevel(){
        echo $this->level;
    }

    public static function GetSmaller($data){
        foreach ($data as $item){
            if(strlen($item<=6)){
            echo "$item<br>";
            }
        }
    }

}