<?php session_start(); 
    //collecting data
    $errorCount = 0;

    $email = $_POST['email'] != "" ? $_POST['email'] : $errorCount++;
    $authorized = $_SESSION['email'] == $email ? true : $errorCount++; 

    if($errorCount > 0){
        //If the email field is blank, show an error message and prevent any further action
        $session_error = "You have " . $errorCount . " error";
        if($errorCount > 1){
            $session_error .= "s";
        }
        $session_error .= " in your form submission";
        $_SESSION["error"] = $session_error;

        //check if the loggedin email matches the e-mail the user provided to reset password
        if($unauthorized == false){
            $_SESSION["unAuthMsg"] = "You are not authorized to change another user's password";
        }
        
        header("Location: ../reset-password.php");
    }else{
        //If the email field is not blank, execute this block
        $allUsers = scandir("../db/users/");
        $countAllUsers = count($allUsers);
        for ($counter=0; $counter < $countAllUsers; $counter++){
            $currentUser = $allUsers[$counter];
            if($currentUser == $email . ".json"){ 
                $userString=file_get_contents("../db/users/" . $currentUser);
                $userObject = json_decode($userString);
            }
        }
        //If after goung through all the email records in the database, the user's email is not found
        //the user will be redirected back to the forgot password page and an error message will be shown  
        // $_SESSION['error' = "Email not registered with us ERR: " . $email;
        // header("Location: ../forgot.php");
    }
?>