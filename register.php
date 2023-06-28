<?php 

session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resource Management - User Registration</title>
    <?php include 'includes/links.php'; ?>
</head>

<body>
    <?php include 'includes/navbar.php'; ?>

    <div class="container" style="margin-top:50px;">
        <?php

if(isset($_SESSION['success']) && $_SESSION['success']!='')
{
    echo'<div class="alert alert-primary text-center font-weight-bold" role="alert">'.$_SESSION['success'].'</div>';
    unset($_SESSION['success']);
}

if(isset($_SESSION['status']) && $_SESSION['status']!='')
{
    echo'<div class="alert alert-danger text-center font-weight-bold" role="alert">'.$_SESSION['status'].'</div>';
    unset($_SESSION['status']);
}

?>

        <div class="card shadow text-center shadow-lg p-5 mb-5 bg-white rounded">
            <h4 class="text-center text-secondary font-weight-bold">User Registration</h4><br>
            <div class="row">
                <div class="col-lg-10 col-xl-9 mx-auto">
                    <form action="code.php" method="POST">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Enter Your Name" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="details" class="form-control"
                                placeholder="Enter Your Qualification like Degree Or MSc" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email Address" required>
                        </div>

                        <div class="form-group">
                            <input type="password" name="pass" class="form-control" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <input type="password" name="confirm_pass" class="form-control"
                                placeholder="Confirm Password" required>
                        </div>
                        <button class="btn btn-outline-success btn-lg btn-block text-uppercase font-weight-bold"
                            name="register" type="submit">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<?php include 'includes/footer.php'; ?>

</html>