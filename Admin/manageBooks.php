<?php
  require('topNav.php');
  $category_id = '';
  $ISBN = '';
  $name = '';
  $author = '';
  $mrp = '';
  $security = '';
  $rent = '';
  $price = '';
  $qty = '';
  $img = '';
  $description = '';
  $short_desc = '';
  $meta_title = '';
  $meta_desc = '';
  $meta_keyword = '';
  $error = '';
  $msg = '';
  
  if (isset($_GET['id']) && $_GET['id'] != '') {
    $id = getSafeValue($con, $_GET['id']);
    $sql = mysqli_query($con, "select * from books where id='$id'");
    $check = mysqli_num_rows($sql);
    if ($check > 0) {
      $row = mysqli_fetch_assoc($sql);
      $categories = $row['category'];
    } else {
      echo "<script>window.location.href='books.php';</script>";
      exit;
    }
    
  }
  
  if (isset($_POST['submit'])) {
    $category = getSafeValue($con, $_POST['category']);
    $sql = mysqli_query($con, "select * from books where name='$name'");
    $check = mysqli_num_rows($sql);
    if ($check > 0) {
      if (isset($_GET['id']) && $_GET['id'] != '') {
        $getData = mysqli_fetch_assoc($sql);
        if ($id == $getData['id']) {
        
        } else {
          $msg = "Category already exist";
        }
      }
    }
    if ($msg == '') {
      if (isset($_GET['id']) && $_GET['id'] != '') {
        $sql = "update categories set category='$category' where id='$id' ";
      } else {
        $sql = "insert into categories(category, status) values('$category', '1')";
      }
      if (mysqli_query($con, $sql)) {
        echo "<script>window.location.href='categories.php';</script>";
        exit;
      } else {
        $error = "Error";
      }
    }
  }
?>
<main style="margin-top: 58px">
    <div class="container pt-4">
        <h4 class="fs-2 text-center ">Manage Books</h4>
        <hr>
        <br>
    </div>

    <form method="post">
        <div class="row g-3">
            <div class="col-sm-8">
                <!-- ISBN -->
                <div class="form-outline mb-4 ms-5">
                    <input type="text" name="ISBN" value="<?php echo $ISBN ?>" id="Book name" class="form-control"
                           required/>
                    <label class="form-label" for="Book name">Enter book ISBN</label>
                </div>
            </div>
            <div class="col-sm">
                <!-- Categories selector-->
                <div>
                    <select class="form-select" name="category_id">
                        <option class="">Select Category</option>
                      <?php
                        $categorySql = mysqli_query($con, "select id, category from categories order by category asc");
                        while ($row = mysqli_fetch_assoc($categorySql)) {
                          echo "<option value=" . $row['id'] . ">" . $row['category'] . "</option>";
                        }
                      ?>
                    </select>
                </div>
            </div>
        </div>
        <!-- Book Name -->
        <div class="form-outline mb-4 mx-5">
            <input type="text" name="name" value="<?php echo $name ?>" id="Book name" class="form-control" required/>
            <label class="form-label" for="Book name">Enter book name</label>
        </div>
        <!-- Book Author -->
        <div class="form-outline mb-4 mx-5">
            <input type="text" name="author" value="<?php echo $author ?>" id="Book name" class="form-control"
                   required/>
            <label class="form-label" for="Book name">Enter book author name</label>
        </div>
        <!-- MRP -->
        <div class="form-outline mb-4 mx-5">
            <input type="number" name="mrp" value="<?php echo $mrp ?>" id="Book name" class="form-control" required/>
            <label class="form-label" for="Book name">Enter MRP</label>
        </div>
        <!-- security -->
        <div class="form-outline mb-4 mx-5">
            <input type="number" name="security" value="<?php echo $security ?>" id="Book name" class="form-control"
                   required/>
            <label class="form-label" for="Book name">Enter book security charges</label>
        </div>
        <!-- rent -->
        <div class="form-outline mb-4 mx-5">
            <input type="number" name="rent" value="<?php echo $rent ?>" id="Book name" class="form-control"
                   required/>
            <label class="form-label" for="Book name">Enter book rent Cost</label>
        </div>
        <!-- qty -->
        <div class="form-outline mb-4 mx-5">
            <input type="number" name="qty" value="<?php echo $qty ?>" id="Book name" class="form-control" required/>
            <label class="form-label" for="Book name">Enter book quantity</label>
        </div>
        <!-- img -->
        <div class="form-outline mb-4 mx-5">
            <label class="form-label ms-2 p-1" for="Book name">Enter book image</label>
            <input type="file" name="img" id="Book name" class="form-control" required/>
        </div>

        <!-- short_desc -->
        <div class="form-outline mb-4 mx-5">
            <textarea name="short_desc" id="Book name" class="form-control"
                      required><?php echo $short_desc ?></textarea>
            <label class="form-label" for="Book name">Enter book short description</label>
        </div>

        <!-- description -->
        <div class="form-outline mb-4 mx-5">
            <textarea name="description" id="Book name" class="form-control"
                      required><?php echo $description ?></textarea>
            <label class="form-label" for="Book name">Enter book description</label>
        </div>

        <!-- meta_title -->
        <div class="form-outline mb-4 mx-5">
            <textarea name="meta_title" id="Book name" class="form-control"
                      required><?php echo $meta_title ?></textarea>
            <label class="form-label" for="Book name">Enter book meta title</label>
        </div>

        <!-- meta_desc -->
        <div class="form-outline mb-4 mx-5">
            <textarea name="meta_desc" id="Book name" class="form-control"
                      required><?php echo $meta_desc ?></textarea>
            <label class="form-label" for="Book name">Enter book meta description</label>
        </div>

        <!-- meta_keyword -->
        <div class="form-outline mb-4 mx-5">
            <textarea name="description" id="Book name" class="form-control"
                      required><?php echo $meta_keyword ?></textarea>
            <label class="form-label" for="Book name">Enter book meta keyword</label>
        </div>

        <div class="mb-1 d-flex justify-content-center field_error">
          <?php echo $msg ?>
        </div>
        <div class="mb-1 d-flex justify-content-center">
          <?php echo $error ?>
        </div>
        <!-- Submit button -->
        <div class="text-center">
            <button type="submit" name="submit" class="btn btn-primary mx-5">Submit</button>
        </div>
    </form>
</main>
<!-- MDB -->
<script type="text/javascript" src="js/mdb.min.js"></script>
<!-- Custom scripts -->
<script type="text/javascript" src="js/admin.js"></script>
</body>
</html>
