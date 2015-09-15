<?php 

class LoginModel {
    
    private $name;
    private $password;
    
    private $message;

    private $loggedIn;

    function checkLogin ($inputName, $inputPassword)
    {
        $name = "Admin";
        $password = "Password";
        
        
        $log = false;
        $this->loggedIn = $log;
        
        if($name == $inputName && $password == $inputPassword)
        {
        
        
        $message = "Welcome";
        
        $log = true;
        $this->loggedIn = $log;
 
        }
        
        else if($inputName == "")
        {
            
            $message = "Username is missing";
            
        }
        
        else if($inputPassword == "")
        {
            
            $message = "Password is missing";
            
        }
        
        else
        {
            $message = "Wrong name or password";
        }
        
        $this->message = $message;
        
    } 
    
    public function responseModel(){
        
        return $this->message;
        
    }
    
    public function isLoggedin()
    {
        return $this->loggedIn;
    }
    
}