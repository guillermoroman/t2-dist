<?php

class Employee {
    private $name;
    protected $salary;
    private $joinDate;
    private $endDate;

    public function __construct($name, $salary, $date){
        $this->name = $name;
        $this->salary = $salary;
        $this->joinDate = $date;
    }

    public function endContract($date){
        $this->endDate = $date;
        $this->salary = 0;
    }

    public function calculateSalary(){
        return $this->salary;
    }
}
