<?php
session_start();
if(!$_SESSION['data']){
header('location:logout');
}
include('includes/header.php');
?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Dashboard</h1>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Dashboard</h6>
        </div>
        <div class="card-body">
            <!-- main area -->
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>

<?php
include('includes/footer.php');
?>