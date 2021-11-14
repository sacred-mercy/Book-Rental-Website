<?php 
require('header.php');

if(isset($_GET['type']) && $_GET['type']!=' ') {
  $type=getSafeValue($con,$_GET['type']);
  if($type=='status') {
    $operation=getSafeValue($con,$_GET['operation']); 
    $id=getSafeValue($con,$_GET['id']);
    if($operation=='active') {
      $status='1';
    }else {
      $status='0';
    }
    $updateStatusSql="update categories set status='$status' where id='$id'";
    mysqli_query($con,$updateStatusSql);
  }

  if($type=='delete') {
    $id=getSafeValue($con,$_GET['id']);
    $deleteSql="delete from categories where id='$id'";
    mysqli_query($con,$deleteSql);
  }
}

$sql="select * from categories order by category asc";
$res=mysqli_query($con,$sql);
?>
<!--Main layout-->
    <main style="margin-top: 58px">
      <div class="container pt-4">
        <h4 class="fs-2 text-center ">Categories</h4><hr><br>
        <h5 class="btn btn-white"><a href="manageCategories.php">Add Categories</a></h5>
      </div>
      <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th class="serial">S. No.</th>
              <th>ID</th>
              <th>Categories</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php
            $i=1;
            while($row=mysqli_fetch_assoc($res)) {?>
            <tr>
              <td class="serial"><?php echo $i ?></td>
              <td> <?php echo $row['id'] ?> </td>
              <td> <?php echo $row['category'] ?> </td>
              <td> 
                <?php 
                if($row['status']==1) {
                  echo "<a href='?type=status&operation=deactive&id=".$row['id'].
                  "'>Active</a>&nbsp&nbsp";
                }else{
                  echo "<a href='?type=status&operation=active&id=".$row['id'].
                  "'>Deactive</a>&nbsp&nbsp";
                }
                echo "<a href='?type=delete&id=".$row['id']."'>Delete</a> ";
                // echo "$nbsp&nbsp <a href='?type=delete&id=".$row['id']."'>Edit</a> ";
                ?> 
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </main>
    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript" src="js/admin.js"></script>
  </body>
</html>
