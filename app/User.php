<?php
namespace DemoApp;

abstract class User{
    protected $name;
    protected $email;
    protected $role;
    protected $level;

    abstract public function setLevel($level);
    abstract public function getLevel();
    abstract public function getAll();
}