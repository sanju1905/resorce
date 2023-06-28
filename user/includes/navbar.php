<nav class="navbar navbar-expand-lg" style="background-color: #55198B !important;">
    <a class=" navbar-brand" href="dashboard"><img src="assets/images/logo.png" alt="" width='45' height='45'>Resource
        Management</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars" aria-hidden="true"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <hr style="background-color:#fff !important;">
        <ul class="navbar-nav ml-auto pr-4">

            <li class="nav-item px-2 mt-1">
                <a class="nav-link <?= (basename($_SERVER['PHP_SELF'])=="index.php")?"active":""; ?>"
                    href="index.php"><i class="fa fa-list-alt" aria-hidden="true"></i>&nbsp;
                    Materials</a>
            </li>
            <li class="nav-item px-2  mt-1">
                <a class="nav-link <?= (basename($_SERVER['PHP_SELF'])=="modal_papers.php")?"active":""; ?>"
                    href="modal_papers.php"><i class="fa fa-list-alt" aria-hidden="true"></i>&nbsp;
                    Modal Papers</a>
            </li>
            <li class="nav-item dropdown pt-1">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    User : <?php echo $_SESSION['user_name'];?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="my_profile.php">My Profile</a>
                    <a class="dropdown-item" href="my_materials.php">My Materials</a>
                    <a class="dropdown-item" href="my_modal_papers.php">My Modal Papers</a>

                </div>
            </li>
            <li class="nav-item px-2  mt-1">
                <form action="code.php" method="POST">
                    <button type="submit" name="logout" class="btn btn-outline-white ml-1" href="#">Logout</button>
                </form>
            </li>



        </ul>
    </div>
</nav>