<?php 
session_start();
class LoginModel {
    
    private $name;
    private $password;
    
    private $message;

    private $loggedIn;

    function checkLogin ($inputName, $inputPassword)
    {
        $this->name = "Admin";
        $this->password = "Password";
        
        var_dump($_SESSION["name"]);
        
        $log = false;
        $this->loggedIn = $log;
        
        if(isset($_SESSION["name"]) && isset($_SESSION["password"])){
            
            if ($_SESSION["name"] == $this->name && $_SESSION["password"] == $this->password )
            {
                
                
                unset($_SESSION["name"]);
                unset($_SESSION["password"]);
                
                return $log = true;
   
            }
            
        }
        
        else {
        
        if($this->name == $inputName && $this->password == $inputPassword)
        {
        
        $_SESSION["name"] = $inputName;
        $_SESSION["password"] = $inputPassword;
        
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
        
        else if($this->name == $inputName && $inputPassword == "")
        {
            
            $message = "Admin";
            
        }
        
        else
        {
            $message = "Wrong name or password";
        }
        
        $this->message = $message;
        
    } 
    
    
    }
    
    public function responseModel(){
        
        return $this->message;
        
    }
    
    public function isLoggedin()
    {
        return $this->loggedIn;
    }
    
}