<?php
    include "../classes/User.php"; 

    //Create an object (if there is a class, we can create object
    $user = new User; 

    //Call the method 
    $user->store($_POST);//Post holds all the data coming from form 


?>
