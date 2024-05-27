<?php 

// Single Responsibility Principle
// Role
// 1. Class should have only one reason to change
// 2. Class should have only one responsibility
// 3. Class should have only one job

// First Example
class User {
    public function register() {
        // Register the user
    }

    public function login() {
        // Login the user
    }
}

class login{

}

class register{
    
}

class SingleResponsibilityUser{

    private $log;
    private $register;

    public function __construct($log, $register){
        $this->log = $log;
        $this->register = $register;
    }

}












