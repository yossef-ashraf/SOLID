<?php 

namespace SingleResponsibility;

use SingleResponsibilityUser\login;
use SingleResponsibilityUser\register;


class SingleResponsibilityUser{

    private $log;
    private $register;

    public function __construct(login $log, register $register){
        $this->log = $log;
        $this->register = $register;
    }

}












