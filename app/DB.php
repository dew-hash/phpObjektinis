<?php
namespace DemoApp;

interface DB {
    public function registerUser();
    public function deleteUser();
    public function showUser();
    public function editUser();
}