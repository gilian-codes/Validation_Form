<?php 

//creates a user validator class to handle validation
// constructor which takes in POST  data from the form
// check required fields to check are present in the data
// creates methods to validate individual fields
// -- a methods to validate a username
// -- a method to validate an email
// return an error array once all checks are done

// uservalidator

class Uservalidator{

    private $data;   //holds the post data 
    private $errors = [];  //error array we send back 
    private static $fields =['username','email'];

    public function __construct($post_data){
        $this->data  = $post_data;   
    }

    public function validateForm(){
       foreach(self::$fields as $field){
         if(!array_key_exists($field, $this->data)){
              trigger_error("$field is not present in data" );
              return;
         }
       }

       $this->validataUsername();
       $this->validateEmail();
       return $this->errors;
    }

    private function validataUsername(){

        $val = trim($this->data['username']);

        if(empty($val)){
            $this->addError('username','username cannot be empty');
        } else{
            if(!preg_match('/^[a-zA-Z0-9]{6,12}$/',$val));
                $this->addError('username', 'username must be 6-12 chars and alphanumeric');
        }
        
    }

     private function validateEmail(){

        $val = trim($this->data['email']);

        if(empty($val)){
            $this->addError('email','email cannot be empty');
        } else{
            if(!filter_var($val,FILTER_VALIDATE_EMAIL)){
                $this->addError('email', 'email must be 6-12 chars and alphanumeric');
        }
        
    }
          
     }

     private function addError($key, $val){
        $this->errors[$key] = $val;
     }

}







?>