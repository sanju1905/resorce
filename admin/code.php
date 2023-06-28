<?php

include 'security.php';




    /* Admin Login */

    if(isset($_POST['login']))
    {

        $name = mysqli_real_escape_string($connection,htmlspecialchars(stripslashes(trim($_POST['name']))));
        $pass = mysqli_real_escape_string($connection,htmlspecialchars(stripslashes(trim($_POST['pass']))));
        $query = "SELECT * FROM admin WHERE email = '$name' OR name = '$name'";
        $query_run = mysqli_query($connection,$query);
        $count = mysqli_num_rows($query_run);
    

        if($count > 0)
        { 
            $row = mysqli_fetch_assoc($query_run);
            if(password_verify($pass,$row['password']))
            {

                    $_SESSION['admin_id'] = $row['id'];
                    $_SESSION['admin_name'] = $row['name'];
                    header('Location: index.php');

            }
            else{

                $_SESSION['status'] = "Incorrect Credentials Please Check Once Again";
                header('Location: login.php');
            }
        }
        else{
            $_SESSION['status'] = "Admin Account Doesn't Exists";
            header('Location: login.php');
        }

    }



    /*Admin Logout */

    if(isset($_POST['logout']))
    {

        unset($_SESSION['admin_id']);
        unset($_SESSION['admin_name']);
        header('Location: login.php');
    }



 /*User Deactivate*/

 if(isset($_POST['deactivate']))
 {
     $id = $_POST['id'];
    $query = "UPDATE user SET status = '0' WHERE id = '$id'";
    $query_run = mysqli_query($connection,$query);
                                                            
    if($query_run)
    {
            $_SESSION['success'] = "User Deactivated Successfully";
            header('Location:users.php');
    }
    else
    {
        $_SESSION['status'] = "Failed To Deactivate User";
        header('Location:users.php');
    }

 }



 /*User activate*/

 if(isset($_POST['activate']))
 {
     $id = $_POST['id'];
    $query = "UPDATE user SET status = '1' WHERE id = '$id'";
    $query_run = mysqli_query($connection,$query);
                                                            
    if($query_run)
    {
            $_SESSION['success'] = "User Activated Successfully";
            header('Location:users.php');
    }
    else
    {
        $_SESSION['status'] = "Failed To Activate User";
        header('Location:users.php');
    }
 }







 
    /*Add Material*/

    if(isset($_POST['add_material']))
    {
    


            $title = $_POST['title'];
            $description = $_POST['description'];
            $year_sem = $_POST['year_sem'];
            $link = $_POST['link'];
            $uploaded_by =  'Admin';
            date_default_timezone_set('Asia/Kolkata');
            $uploaded_at = date('d-m-Y');

            $query = "INSERT INTO materials (title,description,year_sem,link,uploaded_by,uploaded_at) VALUES ('$title','$description','$year_sem','$link','$uploaded_by','$uploaded_at')";
            $query_run = mysqli_query($connection,$query);

        

            if($query_run)
            {
                $_SESSION['success'] = "New Material Added Successfully";
                header('Location: materials.php');
            }
            else
            {
                $_SESSION['status'] = "Failed To Add New Material";
                header('Location: materials.php');
            }




    }








  /*Update Material */

  if(isset($_POST['update_material']))
  {
  

      $id = $_POST['update_materialid'];
      $title = $_POST['title'];
      $description = $_POST['description'];
      $year_sem = $_POST['year_sem'];
      $link = $_POST['link'];
  
      $query = "UPDATE materials SET title = '$title',description ='$description',year_sem ='$year_sem',link ='$link' WHERE material_id = '$id'";
      $query_run = mysqli_query($connection,$query);
                                                              
      if($query_run)
      {
              $_SESSION['success'] = "Material Updated Successfully";
              header('Location:materials.php');
      }
      else
      {
          $_SESSION['status'] = "Failed To Update Material";
          header('Location:materials.php');
      }


  }


  /* Delete  Material */

  if(isset($_POST['delete_material']))
  {
                                                                                   
          $id = $_POST['delete_materialid'];                                                                       
          $query = "DELETE FROM materials WHERE material_id='$id' ";
          $query_run = mysqli_query($connection,$query);
                                                           
          if($query_run)
          {
                  $_SESSION['success'] = "Material Deleted Successfully... :)";
                  header('Location:  materials.php');
          }
          else
          {
                  $_SESSION['status'] = "Material Not Deleted ? Try Again....";
                  header('Location:   materials.php');
          }
                                                                                              
  }  





  

 
    /*Add Modal Paper*/

    if(isset($_POST['add_paper']))
    {
    


            $title = $_POST['title'];
            $description = $_POST['description'];
            $year_sem = $_POST['year_sem'];
            $paper_type = $_POST['paper_type'];
            $year = $_POST['year'];
            $link = $_POST['link'];
            $uploaded_by =  'Admin';
            date_default_timezone_set('Asia/Kolkata');
            $uploaded_at = date('d-m-Y');

            $query = "INSERT INTO modal_papers (title,description,year_sem,paper_type,year,link,uploaded_by,uploaded_at) VALUES ('$title','$description','$year_sem','$paper_type','$year','$link','$uploaded_by','$uploaded_at')";
            $query_run = mysqli_query($connection,$query);

        

            if($query_run)
            {
                $_SESSION['success'] = "New Modal Paper Added Successfully";
                header('Location: modal_papers.php');
            }
            else
            {
                $_SESSION['status'] = "Failed To Add New Modal Paper";
                header('Location: modal_papers.php');
            }




    }








  /*Update Modal Paper */

  if(isset($_POST['update_paper']))
  {
  

      $id = $_POST['update_paperid'];
      $title = $_POST['title'];
      $description = $_POST['description'];
      $year_sem = $_POST['year_sem'];
      $paper_type = $_POST['paper_type'];
      $year = $_POST['year'];
      $link = $_POST['link'];
  
      $query = "UPDATE modal_papers SET title = '$title',description ='$description',year_sem ='$year_sem',paper_type ='$paper_type',year ='$year',link ='$link' WHERE paper_id = '$id'";
      $query_run = mysqli_query($connection,$query);
                                                              
      if($query_run)
      {
              $_SESSION['success'] = "Modal Paper Updated Successfully";
              header('Location:modal_papers.php');
      }
      else
      {
          $_SESSION['status'] = "Failed To Update Modal Paper";
          header('Location:modal_papers.php');
      }


  }


  /* Delete  Modal Paper */

  if(isset($_POST['delete_paper']))
  {
                                                                                   
          $id = $_POST['delete_paperid'];                                                                       
          $query = "DELETE FROM modal_papers WHERE paper_id='$id' ";
          $query_run = mysqli_query($connection,$query);
                                                           
          if($query_run)
          {
                  $_SESSION['success'] = "Modal Paper Deleted Successfully... :)";
                  header('Location:  modal_papers.php');
          }
          else
          {
                  $_SESSION['status'] = "Modal Paper Not Deleted ? Try Again....";
                  header('Location:   modal_papers.php');
          }
                                                                                              
  }  




  
    
?>