<?php
class Student {
    public $name;
    public $group;
    public $gpa;
    public function __construct($name, $group, $gpa) {
        $this->name = $name;
        $this->group = $group;
        $this->gpa = $gpa;
    }
}
