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
                <h3 class="pl-4"><i class="fa fa-list-alt" aria-hidden="true"></i>&nbsp; My Profile </h3>
                <hr>
            </div>





            <?php
    
                    $id = $_SESSION['user_id'];
                    $query = "SELECT * FROM user WHERE id = '$id' ";
                    $query_run = mysqli_query($connection,$query);
                   $row = mysqli_fetch_assoc($query_run)
                   

                    ?>
            <div class="col-md-10 offset-md-1 col-sm-12">

                <div class="card shadow p-3 mb-5 bg-white rounded">
                    <h5>Name : <?php echo $row['name'] ?></h5>
                    <h5>Email : <?php echo $row['email'] ?></h5>
                    <h5 class="text-muted">Qualification Details : <?php echo $row['details'] ?></h5>
                </div>
            </div>






        </div>
    </div>

    <?php include 'includes/footer.php'; ?>

</body>

</html>