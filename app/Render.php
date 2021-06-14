<?php
namespace DemoApp;

class Render{
    public static function Show($data){
        foreach ($data as $item){
            echo "$item<br>";
        }
    }
}
