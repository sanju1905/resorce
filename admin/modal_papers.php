<?php

include 'security.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resource Management - Modal Papers</title>
    <?php include 'includes/links.php'; ?>
</head>

<body>
    <?php include 'includes/navbar.php'; ?>


    <div class="container-fluid mt-4">

        <div class="d-flex justify-content-between">
            <h3><i class="fa fa-list-alt" aria-hidden="true"></i>&nbsp; Modal Papers </h3>

            <button class="btn btn-outline-success" data-toggle="modal" data-target="#add_paper">Add
                Paper</button>
        </div>




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



        <!-- Add Modal Paper Modal -->
        <div class="modal fade" id="add_paper" tabindex="-1" role="dialog" aria-labelledby="add_paperTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="add_paperLongTitle">Add New Modal paper</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body  text-left">


                        <form action="code.php" method="POST">

                            <div class="form-group">
                                <label class="font-weight-bold">Title</label>
                                <input type="text" name="title" class="form-control" placeholder="Enter Material Title"
                                    required>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Description</label>
                                <input type="text" name="description" class="form-control"
                                    placeholder="Enter Material Description" required>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" name="year_sem" for="inputGroupSelect01">Year & Sem</label>
                                </div>
                                <select name="year_sem" class="form-control">
                                    <option value="">Choose Year & Sem</option>
                                    <option value="1-1">1-1</option>
                                    <option value="1-2">1-2</option>
                                    <option value="2-1">2-1</option>
                                    <option value="2-2">2-2</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Paper Type</label>
                                <input type="text" name="paper_type" class="form-control"
                                    placeholder="Enter Paper Type like mid or Sem" required>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Paper Year</label>
                                <input type="text" name="year" class="form-control" placeholder="Enter Modal Paper Year"
                                    required>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Download Link</label>
                                <input type="text" name="link" class="form-control" placeholder="Paste Download Link"
                                    required>
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="add_paper" class="btn btn-primary">Add Modal Paper</button>
                    </div>

                    </form>
                </div>
            </div>
        </div>


        <!--Update Modal Paper-->
        <div class="modal fade" id="update_paper" tabindex="-1" role="dialog" aria-labelledby="update_paperTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="update_paperLongTitle">Update Modal Paper</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-left">

                        <form action="code.php" method="POST">

                            <input type="hidden" name="update_paperid" id="update_paperid">




                            <div class="form-group">
                                <label class="font-weight-bold">Title</label>
                                <input type="text" name="title" id="title" class="form-control"
                                    placeholder="Enter Material Title" required>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Description</label>
                                <input type="text" name="description" id="description" class="form-control"
                                    placeholder="Enter Material Description" required>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" name="year_sem" for="inputGroupSelect01">Year & Sem</label>
                                </div>
                                <select name="year_sem" id="year_sem" class="form-control">
                                    <option value="">Choose Year & Sem</option>
                                    <option value="1-1">1-1</option>
                                    <option value="1-2">1-2</option>
                                    <option value="2-1">2-1</option>
                                    <option value="2-2">2-2</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Paper Type</label>
                                <input type="text" name="paper_type" id="paper_type" class="form-control"
                                    placeholder="Enter Paper Type like mid or Sem" required>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Paper Year</label>
                                <input type="text" name="year" id="year" class="form-control"
                                    placeholder="Enter Modal Paper Year" required>
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Download Link</label>
                                <input type="text" name="link" id="link" class="form-control"
                                    placeholder="Paste Download Link" required>
                            </div>




                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="update_paper" class="btn btn-primary">Update paper</button>
                    </div>

                    </form>
                </div>
            </div>
        </div>






        <!-- Delete Modal Paper-->
        <div class="modal fade" id="delete_paper" tabindex="-1" role="dialog" aria-labelledby="delete_paperCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="delete_paperLongTitle">Delete Modal Paper</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <form action="code.php" method="POST">

                            <input type="hidden" name="delete_paperid" id="delete_paperid">

                            <h4>Do You Want to Delete this Modal Paper </h4>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
                                <button type="submit" name="delete_paper" class="btn btn-primary">YES</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>













        <br>
        <?php
                            date_default_timezone_set('Asia/Kolkata');
                            $date = date('d-m-Y');

                            $query = "SELECT * FROM modal_papers";
                            $query_run = mysqli_query($connection,$query);

                    ?>

        <div class="table-responsive text-nowrap">
            <table class="table table-bordered table-striped">
                <thead style="background-color:#55198B !important;color:#fff !important;">
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Year & Sem</th>
                        <th>Paper Type</th>
                        <th>Paper Year</th>
                        <th>Link</th>
                        <th>Uploaded By</th>
                        <th>Uploaded Time</th>
                        <th>Update</th>
                        <th>Delete</th>
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
                        <td><?php echo $row['paper_id'];?></td>
                        <td><?php echo $row['title'];?></td>
                        <td><?php echo $row['description'];?></td>
                        <td><?php echo $row['year_sem'];?></td>
                        <td><?php echo $row['paper_type'];?></td>
                        <td><?php echo $row['year'];?></td>
                        <td><?php echo $row['link'];?></td>
                        <td><?php echo $row['uploaded_by'];?></td>
                        <td><?php echo $row['uploaded_at'];?></td>
                        <td><button type="button" class="btn btn-info update_paper">Edit</button></td>
                        <td><button type="button" class="btn btn-danger delete_paper">Delete</button></td>
                    </tr>
                    <?php
                    }
                    }
                    else
                    {
                    echo '<td class="text-center text-danger font-weight-bold" colspan="13">No Modal Papers Found</td>';
                    }

                    ?>
                </tbody>
            </table>
        </div>


    </div>



    </div>


















    <!-- update Modal Paper script -->
    <script>
    $(document).ready(function() {

        $('.update_paper').on('click', function() {
            $('#update_paper').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            console.log(data);

            $('#update_paperid').val(data[0]);
            $('#title').val(data[1]);
            $('#description').val(data[2]);
            $('#year_sem').val(data[3]);
            $('#paper_type').val(data[4]);
            $('#year').val(data[5]);
            $('#link').val(data[6]);



        });
    });
    </script>
    <!-- delete Modal Paper script -->
    <script>
    $(document).ready(function() {

        $('.delete_paper').on('click', function() {
            $('#delete_paper').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            console.log(data);
            $('#delete_paperid').val(data[0]);
        });
    });
    </script>





    <?php include 'includes/footer.php'; ?>





</body>

</html>