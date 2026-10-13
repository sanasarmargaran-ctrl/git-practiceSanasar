<?php
class Teacher {
    public $name;
    public $subject;
    public $experience;
    public function __construct($name, $subject, $experience) {
        $this->name = $name;
        $this->subject = $subject;
        $this->experience = $experience;
    }
}
