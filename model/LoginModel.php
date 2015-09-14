<?php 

class LoginModel {
    
    private $name;
    private $password;
    
    private $message;

    
  //  $userLoggedIn = false;
    
    
    
    
    function checkLogin ($inputName, $inputPassword)
    {
        $name = "Admin";
        $password = "Password";
        
        if($name == $inputName && $password == $inputPassword)
        {
        
      //  $userLoggedIn = true;
        $message = "Welcome";
       
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
    
}