<?php 
include 'security.php';
$id= $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resource Management</title>
    <?php include 'includes/links.php'; ?>
</head>

<body>
    <?php include 'includes/navbar.php'; ?>


    <div class="container-fluid mt-4">
        <div class="row">

            <div class="col-md-10 offset-md-1 col-sm-12">
                <div class="d-flex justify-content-between">
                    <h4 class="pl-4"><i class="fa fa-list-alt" aria-hidden="true"></i>&nbsp; Modal Paper Details </h4>
                    <a href="modal_papers.php" class="btn btn-outline-primary">Back</a>
                </div>
                <hr>
            </div>

            <div class="col-md-10 offset-md-1 col-sm-12 ">
                <div class="card shadow p-3 mb-5 bg-white rounded">

                    <?php
            
                     $query = "SELECT * FROM modal_papers WHERE paper_id = '$id'";
                    $query_run = mysqli_query($connection,$query);
                    $row = mysqli_fetch_assoc($query_run)

                    ?>
                    <h5><?php echo $row['title']; ?></h5>
                    <h5 class="text-muted"><?php echo $row['description']; ?></h5>
                    <hr>
                    <div class="row">
                        <h5 class="col-md-4">Year & Sem : &nbsp;<span
                                class="badge badge-secondary"><?php echo $row['year_sem']; ?></span>
                        </h5>
                        <h5 class="col-md-4">Paper Type : &nbsp;<span
                                class="badge badge-secondary"><?php echo $row['paper_type']; ?></span>
                        </h5>
                        <h5 class="col-md-4">Year : &nbsp;<span
                                class="badge badge-secondary"><?php echo $row['year']; ?></span>
                        </h5>
                        <h5 class="col-md-4">Uploaded By : &nbsp;<span class="badge badge-secondary">
                                <?php
                                $user_id = $row['uploaded_by'];
                                
                                    $query1 = "SELECT * FROM user WHERE id = '$user_id'";
                                    $query_run1 = mysqli_query($connection,$query1);
                                    $row1 = mysqli_fetch_assoc($query_run1);
                                    if($user_id == 'Admin')
                                    {
                                        echo 'Admin';
                                    }
                                    else{
                                        echo $row1['name'];
                                    }
                      
                                  ?></span>
                        </h5>
                        <h5 class="col-md-4">Uploaded On: &nbsp;<span
                                class="badge badge-secondary"><?php echo $row['uploaded_at']; ?></span>
                        </h5>
                    </div>
                    <hr>
                    <div class="container-fulid">
                        <div class="col-md-6">
                            <a class="btn btn-secondary font-weight-bold" href="<?php echo $row['link']; ?>">Download
                                Modal Paper</a>
                        </div>

                    </div>
                </div>
            </div>


        </div>
    </div>


    <?php include 'includes/footer.php'; ?>

</body>

</html>