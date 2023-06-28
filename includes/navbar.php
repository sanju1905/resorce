<nav class="navbar navbar-expand-lg" style="background-color: #55198B !important;">
    <a class=" navbar-brand" href="dashboard"><img src="assets/images/logo.png" alt="" width='45' height='45'> Resource
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
                    href="index.php"><i class="fa fa-tachometer" aria-hidden="true"></i>&nbsp;
                    Materials</a>
            </li>
            <li class="nav-item px-2  mt-1">
                <a class="nav-link <?= (basename($_SERVER['PHP_SELF'])=="modal_papers.php")?"active":""; ?>"
                    href="modal_papers.php"><i class="fa fa-list-alt" aria-hidden="true"></i>&nbsp;
                    Modal Papers</a>
            </li>
            <li class="nav-item px-2  mt-1">
                <a href="register.php" class="btn btn-outline-white btns">Register</a>
            </li>
            <li class="nav-item px-2  mt-1">
                <a href="login.php" class="btn btn-outline-white btns">Login</a>
            </li>
        </ul>
    </div>
</nav>