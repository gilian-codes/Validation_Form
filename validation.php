<?php 

require('user_validation.php');



if(isset($_POST['submit'])){
    //validate the form
    //echo 'form submitted';

    //validate entries
    $validation = new Uservalidator($_POST);
    $errors = $validation->validateForm();

    //save data to the database


}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>validation class</title>
    <link rel="stylesheet" href="../styles.css ">
</head>
<body>

     <div class="new-user">
        <h2> Create new user</h2>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">

           <label> Username:</label>
           <input type="text" name="username" value=" <?php echo htmlspecialchars($_POST['username']) ?? ''?>"/>
           <div class="error">
            <?php echo $errors['username'] ?? ''?>
           </div>

           <label> Email:</label>
           <input type="text" name="email"  value=" <?php echo htmlspecialchars($_POST['email']) ?? ''?>"/>

           <div class="error">
            <?php echo $errors['username'] ?? ''?>
           </div>

           <input type="submit" value ="submit" name ="submit"/>
        </form>
     </div>
    
</body>
</html>