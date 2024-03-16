<?php
session_start();
if(!$_SESSION['data']){
header('location:logout');
}
date_default_timezone_set('Asia/Kolkata');
$current_date= date('d_m_Y_H_i');
include('includes/header.php');
include('../includes/config.php');

if(isset($_GET['did'])){
    if(is_numeric($_GET['did'])){
     $id= $_GET['did'];
        $delete ="DELETE FROM recent_projects WHERE sno='$id'";
        if ($conn->query($delete) === TRUE) {
            ?>
<script>
window.location = "recent_project_image";
</script>
<?php
        }
    } ;
}
$sql4= "SELECT * FROM `recent_projects`";
$result = $conn->query($sql4);
if(isset($_POST['submit'])){
    $sql ="INSERT INTO `recent_projects`(`img_path`, `status`, `currernt_date`, `updated_date`) VALUES ('error','t','$current_date','$current_date')";
    if ($conn->query($sql) === TRUE) {
        $last_id = $conn->insert_id;
  if(isset($_FILES['image'])){
     
        
    $imname= $last_id ;
   
    
     if(isset($_FILES['image'])){
      $file_name = $imname;
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(@end(explode('.',$_FILES['image']['name'])));
      
      $extensions= array("jpeg","jpg","png");
	 
         move_uploaded_file($file_tmp,"../assets/project/".$file_name.".".$file_ext);
		 $imgname="assets/project/".$file_name.".".$file_ext;
     
     $update = "UPDATE recent_projects SET img_path='$imgname' WHERE sno='$last_id'";
     if ($conn->query($update) === TRUE) {
?>
<script>
window.location = "recent_project_image";
</script>
<?php
    }

        }
     }
     }
}
?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Recent Project Gallery</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add Gallery</h6>
        </div>
        <div class="card-body">
            <form method="post" action="" enctype='multipart/form-data'>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label for="staticEmail" class="col-md-2 col-form-label">Image</label>
                                <div class="col-md-7">
                                    <input type="file" class="form-control" name="image"
                                        accept="image/png, image/gif, image/jpeg">

                                </div>
                                <div class="col-md-3">
                                    <input type="submit" class="form-control btn btn-primary" name="submit">

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">View Gallery</h6>
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Date Of Insert</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php while($row = $result->fetch_assoc()){?>

                    <tr class="table">
                        <th scope="row"><?php echo $row['sno'];?></th>
                        <td><img src="../<?php echo $row['img_path'];?>" style="height: 100px;
    width: 100px;" /></td>
                        <td><?php echo $row['currernt_date'];?></td>
                        <td><a href="recent_project_image?did=<?php echo $row['sno'];?>"
                                class="btn btn-danger">Delete</a></td>

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