<?php

include 'security.php';



    if(isset($_POST['register']))
    {

        $name = mysqli_real_escape_string($connection,htmlspecialchars(stripslashes(trim($_POST['name']))));
        $details = mysqli_real_escape_string($connection,htmlspecialchars(stripslashes(trim($_POST['details']))));
        $email = mysqli_real_escape_string($connection,htmlspecialchars(stripslashes(trim($_POST['email']))));
        $pass = mysqli_real_escape_string($connection,htmlspecialchars(stripslashes(trim($_POST['pass']))));
        $confirmpass = mysqli_real_escape_string($connection,htmlspecialchars(stripslashes(trim($_POST['confirm_pass']))));
       

        if($pass != $confirmpass)
        {
            $_SESSION['status'] = "Passwords Doesn't Match";
            header('Location: register.php');
     
        }
        else{


            $query1 = "SELECT * FROM user WHERE email = '$name' OR name = '$name'";
             $query_run1 = mysqli_query($connection,$query1);
             $row1 = mysqli_fetch_assoc($query_run1);

            if($name == $row1['name'] || $email == $row1['email'])
            {
                $_SESSION['status'] = "Username or email already exists";
                header('Location:   register.php');
            }
            else{
                date_default_timezone_set('Asia/Kolkata');
                $joined_at = date('d-m-Y');
                $hashedPassword = password_hash($pass, PASSWORD_BCRYPT);
                $query = "INSERT INTO user (name,details,email,password,status,joined_at) VALUES ('$name', '$details','$email','$hashedPassword','1','$joined_at')";
                $query_run = mysqli_query($connection,$query);
                
                if($query_run)
                {
                        $_SESSION['success'] = "Your Registration is Successful Please Login";
                        header('Location:  login.php');
                }
                else
                {
                        $_SESSION['status'] = "Registration Failed Try Again";
                        header('Location:   register.php');
                }
            }
            
                 
        }
    }




    

    /* User Login */

    if(isset($_POST['login']))
    {

        $name = mysqli_real_escape_string($connection,htmlspecialchars(stripslashes(trim($_POST['name']))));
        $pass = mysqli_real_escape_string($connection,htmlspecialchars(stripslashes(trim($_POST['pass']))));
        $query = "SELECT * FROM user WHERE email = '$name' OR name = '$name'";
        $query_run = mysqli_query($connection,$query);
        $count = mysqli_num_rows($query_run);
    

        if($count > 0)
        { 
            $row = mysqli_fetch_assoc($query_run);
            if(password_verify($pass,$row['password']))
            {


                if($row['status'] == '0')
                {
                    $_SESSION['status'] = "Your Account is Deactivated Contact Admin";
                    header('Location: login.php');
                }else{
                    $_SESSION['user_id'] = $row['id'];
                    $_SESSION['user_name'] = $row['name'];
                    header('Location: user/index.php');
                }
                    

            }
            else{

                $_SESSION['status'] = "Incorrect Credentials Please Check Once Again";
                header('Location: login.php');
            }
        }
        else{
            $_SESSION['status'] = "User Account Doesn't Exists";
            header('Location: login.php');
        }

    }



?>