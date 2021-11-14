<?php 
require('header.php');
if(isset($_POST['submit'])) {
    $category = getSafeValue($con,$_POST['category']);
    mysqli_query($con,"insert into categories(category,status) values('$category','1')");
    header('location:manageCategories.php');
    die();
}
?>
    <main style="margin-top: 58px">
      <div class="container pt-4">
        <h4 class="fs-2 text-center ">Add Categories</h4><hr><br>
      </div>  

      <form method="post">
        <div class="form-outline mb-4 mx-5">
            <input type="text" name="category" id="form1Example1" class="form-control" required/>
            <label class="form-label" for="form1Example1">Enter categories name</label>
        </div>
        <!-- Submit button -->
        <div class="text-center">
          <button type="submit" class="btn btn-primary mx-5" name="submit">Add</button>
        </div>
      </form>
    </main>
    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript" src="js/admin.js"></script>
  </body>
</html>
