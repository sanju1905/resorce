<?php

include 'security.php';


    /*User Logout */

    if(isset($_POST['logout']))
    {

        unset($_SESSION['user_id']);
        unset($_SESSION['user_name']);
        header('Location: ../index.php');
    }




 
    /*Add Material*/

    if(isset($_POST['add_material']))
    {
    


            $title = $_POST['title'];
            $description = $_POST['description'];
            $year_sem = $_POST['year_sem'];
            $link = $_POST['link'];
            $uploaded_by =  $_SESSION['user_id'];
            date_default_timezone_set('Asia/Kolkata');
            $uploaded_at = date('d-m-Y');

            $query = "INSERT INTO materials (title,description,year_sem,link,uploaded_by,uploaded_at) VALUES ('$title','$description','$year_sem','$link','$uploaded_by','$uploaded_at')";
            $query_run = mysqli_query($connection,$query);

        

            if($query_run)
            {
                $_SESSION['success'] = "New Material Added Successfully";
                header('Location: my_materials.php');
            }
            else
            {
                $_SESSION['status'] = "Failed To Add New Material";
                header('Location: my_materials.php');
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
              header('Location:my_materials.php');
      }
      else
      {
          $_SESSION['status'] = "Failed To Update Material";
          header('Location:my_materials.php');
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
                  header('Location:  my_materials.php');
          }
          else
          {
                  $_SESSION['status'] = "Material Not Deleted ? Try Again....";
                  header('Location:   my_materials.php');
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
            $uploaded_by =  $_SESSION['user_id'];
            date_default_timezone_set('Asia/Kolkata');
            $uploaded_at = date('d-m-Y');

            $query = "INSERT INTO modal_papers (title,description,year_sem,paper_type,year,link,uploaded_by,uploaded_at) VALUES ('$title','$description','$year_sem','$paper_type','$year','$link','$uploaded_by','$uploaded_at')";
            $query_run = mysqli_query($connection,$query);

        

            if($query_run)
            {
                $_SESSION['success'] = "New Modal Paper Added Successfully";
                header('Location: my_modal_papers.php');
            }
            else
            {
                $_SESSION['status'] = "Failed To Add New Modal Paper";
                header('Location: my_modal_papers.php');
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
              header('Location:my_modal_papers.php');
      }
      else
      {
          $_SESSION['status'] = "Failed To Update Modal Paper";
          header('Location:my_modal_papers.php');
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
                  header('Location:  my_modal_papers.php');
          }
          else
          {
                  $_SESSION['status'] = "Modal Paper Not Deleted ? Try Again....";
                  header('Location:   my_modal_papers.php');
          }
                                                                                              
  }  



?>