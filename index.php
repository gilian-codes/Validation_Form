<?php 

//CLASS
  class User {
        
    //properties are defined
    public $name ;
    protected $email;
    public $role ='member';

    public function __construct($name, $email){
       $this->name = $name;
       $this->email =$email;
    }

    //destruct method
    // public function __destruct(){
    //      echo "the user $this->name was removed" . '<br/>'; ;
    // }

    public function __clone(){  //with line 79
        $this->name = $this->name . '(cloned)<br>';
    }



    // methods/actions 
       public function addFriend(){
        // $this->name;
        return " $this->email added a new friend";
       }

       public function message(){
        return "$this->email sent a new email ";
       }
   
         //getters
         public function getEmail(){
            return $this->email;
         }

         //setters
         public function setemail($email){
               if(strpos($email,'@') >-1){
                    $this->email = $email;
               }
         }
  }


  //INHERITANCE
class AdminUser extends User{
       public $level; //additional feature
       public $role='Admin'; //it overwrites the role in line 9

       public function __construct($name,$email,$level){
                 $this->level = $level;
                 parent::__construct($name,$email);
        
       }
        public function message(){
            return "$this->email, an admin, sent a new email ";
         }


      
}

  //new object
  $userone = new User('ken','ken@gmail.com') ;
  $usertwo = new User('joseph','joseph@gmail.com');
  $userthree = new AdminUser('yoshi', 'yoshi@gmail.com', 5) ;

  //line 16
//   unset($userone); //removes the reference to the instance of the user


//CLONE
$userfour = clone $userone; //21
echo $userfour->name;


    // echo $userone->role;
//   echo $userthree->role;
//   echo $userone->message() .'<br/>';
  echo $userthree->message().'<br/>'; 

  echo $userthree->name . '<br/>';
  echo $userthree->getEmail(). '<br/>'; //get cuz email is a private property
  echo $userthree->level.'<br/>';


   //to know if the object is actually part of the class we use a fxn called get_class(variableofnewclass)
  // echo' the class is' .  get_class($userone);

  //access the properties
    //  echo $userone->name .'<br/>';

         //to access the private modifier 
        // echo $userone->addFriend();

  //echo $userone->email .'<br/>';
        // echo $userone->addFriend() .'<br/>'; //invoke the addfriend function using paranthesis

 // get_class_vars('User'); //returns all the variables/properties available in that class
  // get_class_methods('User'); //returns all the methods available in that class
  print_r(get_class_vars('User')) . ' <br/>';  
  print_r(get_class_methods('User'))  . ' <br/>';

//for usertwo
//change name and email for usertwo
// $usertwo->name='daniel';
// $usertwo->email='daniel@gmail.com';

echo $usertwo->name .'<br/>';
//echo $usertwo->email .'<br/>';
echo $usertwo->addFriend() .'<br/>'; 


//line 29
    // echo $userone->setEmail = 'mario@gmail.com';


//line 21
    //  echo $userone-> getEmail() .'<br/>'; 
echo $usertwo-> getEmail() .'<br/>';








?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP TUTORIALS</title>
</head>
<body>
    
</body>
</html>