<?php include 'security.php'; ?>
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
                <h4 class="pl-4"><i class="fa fa-list-alt" aria-hidden="true"></i>&nbsp; Modal Papers </h4>
                <hr>
            </div>





            <?php
            
                            $query = "SELECT * FROM modal_papers ";
                            $query_run = mysqli_query($connection,$query);

                        ?>
            <?php

                if(mysqli_num_rows($query_run) > 0)
                {
                    while($row = mysqli_fetch_assoc($query_run))
                    {

                    ?>
            <div class="col-md-10 offset-md-1 col-sm-12">
                <a href="modal_paper_details.php?id=<?php echo $row['paper_id']; ?>"" style=" text-decoration: none
                    !important;">
                    <div class="card shadow p-3 mb-5 bg-white rounded">
                        <h5 class="text-dark"><?php echo $row['title'] ?></h5>
                        <h5 class="text-muted"><?php echo $row['description'] ?></h5>
                        <hr>
                        <div class="row">
                            <h5 class="col-md-4">Year & Sem : &nbsp;<span
                                    class="badge badge-secondary"><?php echo $row['year_sem'] ?></span>
                            </h5>
                            <h5 class="col-md-4">Paper Type : &nbsp;<span
                                    class="badge badge-secondary"><?php echo $row['paper_type'] ?></span>
                            </h5>
                            <h5 class="col-md-4">Year : &nbsp;<span
                                    class="badge badge-secondary"><?php echo $row['year'] ?></span>
                            </h5>
                        </div>
                    </div>
                </a>
            </div>


            <?php
                }
                }
                else
                {
                    ?>
            <div class="col-md-10 offset-md-1 col-sm-12 pt-3">
                <div class="alert alert-primary" role="alert">
                    <h5 class="text-secondary foont-weight-bold">No Modal Papers Found</h5>
                </div>

            </div>
            <?php
            }

            ?>



        </div>
    </div>

    <?php include 'includes/footer.php'; ?>

</body>

</html>