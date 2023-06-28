<?php

include 'security.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resource Management - Users</title>
    <?php include 'includes/links.php'; ?>
</head>

<body>
    <?php include 'includes/navbar.php'; ?>


    <div class="container-fluid mt-4">


        <h3><i class="fa fa-list-alt" aria-hidden="true"></i>&nbsp; Users </h3>


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


        <?php
                            date_default_timezone_set('Asia/Kolkata');
                            $date = date('d-m-Y');

                            $query = "SELECT * FROM user";
                            $query_run = mysqli_query($connection,$query);

                    ?>

        <div class="table-responsive text-nowrap">
            <table class="table table-bordered table-striped">
                <thead style="background-color:#55198B !important;color:#fff !important;">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Details</th>
                        <th>Email</th>
                        <th>Joined At</th>
                        <th>Active/Deactive</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    if(mysqli_num_rows($query_run) > 0)
                    {
                    while($row = mysqli_fetch_assoc($query_run))
                    {

                    ?>
                    <tr>
                        <td><?php echo $row['id'];?></td>
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['details'];?></td>
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['joined_at'];?></td>

                        <?php 
                        if($row['status'] == '1'){
                        ?>
                        <form action="code.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <td><button type="submit" name="deactivate" class="btn btn-danger">Deactivate</button></td>
                        </form>
                        <?php
                        }
                        else{
                        ?>
                        <form action="code.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <td><button type="submit" name="activate" class="btn btn-success">Activate</button></td>
                        </form>
                        <?php
                        }
                        ?>

                    </tr>
                    <?php
                    }
                    }
                    else
                    {
                    echo '<td class="text-center text-danger font-weight-bold" colspan="13">No Users Found</td>';
                    }

                    ?>
                </tbody>
            </table>
        </div>


    </div>



    </div>


















    <!-- update Booking script -->
    <script>
    $(document).ready(function() {

        $('.update_booking').on('click', function() {
            $('#update_booking').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            console.log(data);

            $('#update_bookingid').val(data[0]);
            $('#name').val(data[1]);
            $('#location').val(data[2]);
            $('#phone').val(data[3]);
            $('#table_no').val(data[4]);



        });
    });
    </script>
    <!-- delete Booking script -->
    <script>
    $(document).ready(function() {

        $('.delete_booking').on('click', function() {
            $('#delete_booking').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            console.log(data);
            $('#delete_bookingid').val(data[0]);
        });
    });
    </script>





    <?php include 'includes/footer.php'; ?>





</body>

</html>