<?php
require('topNav.php');

if (isset($_GET['type']) && $_GET['type'] != ' ') {
  $type = getSafeValue($con, $_GET['type']);
  if ($type == 'status') {
    $operation = getSafeValue($con, $_GET['operation']);
    $id = getSafeValue($con, $_GET['id']);
    if ($operation == 'active') {
      $status = '1';
    } else {
      $status = '0';
    }
    $updateStatusSql = "update books set status='$status' where id='$id'";
    mysqli_query($con, $updateStatusSql);
  }

  if ($type == 'best_seller') {
    $operation = getSafeValue($con, $_GET['operation']);
    $id = getSafeValue($con, $_GET['id']);
    if ($operation == 'active') {
      $bestSeller = '1';
    } else {
      $bestSeller = '0';
    }
    $updateStatusSql = "update books set best_seller='$bestSeller' where id='$id'";
    mysqli_query($con, $updateStatusSql);
  }

  if ($type == 'delete') {
    $id = getSafeValue($con, $_GET['id']);
    $deleteSql = "delete from books where id='$id'";
    mysqli_query($con, $deleteSql);
  }
}

$sql = "select books.*, categories.category from books left join categories on books.category_id=categories.id order by books.name asc";
$res = mysqli_query($con, $sql);
?>
<!--Main layout-->
<main>
    <div class="container pt-4">
        <h4 class="fs-2 text-center ">Books</h4>
        <hr>
        <br>
    </div>
    <h5 class="btn btn-white ms-5 px-2 py-1 fs-6 "><a class="link-dark" href="manageBooks.php">Add Book</a></h5>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>ISBN</th>
                    <th>Category</th>
                    <th>img</th>
                    <th>Name</th>
                    <th>Author</th>
                    <th>MRP</th>
                    <th>Security</th>
                    <th>Rent</th>
                    <th>Price</th>
                    <th>Qty</th>
                    <!--                <th></th>-->
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
        while ($row = mysqli_fetch_assoc($res)) { ?>
                <tr>
                    <td> <?php echo $row['ISBN'] ?> </td>
                    <td> <?php echo $row['category'] ?> </td>
                    <td>
                        <img src="<?php echo BOOK_IMAGE_SITE_PATH . $row['img'] ?>" class="card-img" height="60px"
                            width="80px">
                    </td>
                    <td> <?php echo $row['name'] ?> </td>
                    <td> <?php echo $row['author'] ?> </td>
                    <td> <?php echo $row['mrp'] ?> </td>
                    <td> <?php echo $row['security'] ?> </td>
                    <td> <?php echo $row['rent'] ?> </td>
                    <td> <?php echo $row['price'] ?> </td>
                    <td> <?php echo $row['qty'] ?> </td>
                    <td>
                        <?php
              if ($row['best_seller'] == 1) {
                echo "<a class='link-white btn btn-primary px-2 py-1' href='?type=best_seller&operation=deactive&id=" . $row['id'] .
                  "'>Most Viewed</a>&nbsp&nbsp";
              } else {
                echo "<a class='link-white btn btn-success px-2 py-1' href='?type=best_seller&operation=active&id=" . $row['id'] .
                  "'>Normal</a>&nbsp&nbsp";
              }
              ?>
                    </td>
                    <td>
                        <?php
              echo "<a class='link-white btn btn-primary px-2 py-1' href='manageBooks.php?id=" . $row['id'] . "'>Edit</a>";
              ?>
                    </td>
                    <td>
                        <?php
              echo "<a class='link-white btn btn-danger px-2 py-1' href='?type=delete&id=" . $row['id'] . "'>Delete</a>";
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