<?php
session_start();
if(!$_SESSION['data']){
header('location:logout');
}

include('includes/header.php');
include "../includes/config.php";
$sql= "SELECT * FROM `contact`";
$result = $conn->query($sql);

?>

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Contact Message</h1>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">View Message</h6>
        </div>
        <div class="card-body">
            <table class="table table-responsive table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Message</th>
                    </tr>
                </thead>
                <tbody>

                    <?php while($row = $result->fetch_assoc()){?>

                    <tr class="table table-responsive">
                        <th scope="row"><?php echo $row['sno'];?></th>
                        <td><?php echo $row['your-name'];?></td>
                        <td><?php echo $row['your-email'];?></td>
                        <td><?php echo htmlspecialchars($row['your-message']);?></td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>

<?php
include('includes/footer.php');
?>