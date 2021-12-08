<?php require('header.php') ?>
<?php
  $categoryId = '';
  if (isset($_GET['id'])) {
    $categoryId = mysqli_real_escape_string($con, $_GET['id']);
  }
  $getProduct = getProduct($con, '', $categoryId);
?>
<?php
  $catRes = mysqli_query($con, "select id, category from categories where status=1 order by category asc");
  $catArr = array();
  while ($row = mysqli_fetch_assoc($catRes)) {
    $catArr[] = $row;
  }
?>
<script>
    document.title = "Book Categories | Book Rental";
</script>
<div class="container-fluid ">
    <div class="row py-3">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse book-category-column">
            <div class="position-sticky pt-3">
                <h3 class="sidebar-heading d-flex justify-content-between align-items-center px-3  mb-1 text-muted">
                    <span>Categories</span>
                </h3>
                <ul class="nav flex-column">
                  <?php
                    foreach ($catArr
                    
                    as $list) {
                  ?>
                    <li>
                        <a class="nav-link nav-pills link-dark " aria-current="page"
                           href="bookCategory.php?id=<?php echo $list['id'] ?>">
                          <?php echo $list['category'] ?> </a>
                      <?php
                        }
                      ?>
                    </li>
                </ul>
            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Select Category from sidebar</h1>
            </div>
          <?php
            if (count($getProduct) > 0) {
              ?>
                <div class="row gy-3 text-center ">
                  <?php
                    foreach ($getProduct
                    
                             as $list) {
                      ?>
                        <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                            <div class="card border-dark mt-3 shadow-sm product">
                                <img
                                        id="card-img"
                                        alt="Book Image"
                                        src="<?php echo BOOK_IMAGE_SITE_PATH . $list['img'] ?>"
                                        class="card-img-top img-fluid rounded"
                                />
                                <div class="overlay">
                                    <a href="book.php?id=<?php echo $list['id'] ?>"
                                       class="btn-lg text-decoration-none rent-btn">
                                        Info</a>
                                </div>
                            </div>
                            <div id="bookCardName">
                                <a href="book.php?id=<?php echo $list['id'] ?>"
                                   class="card-text text-uppercase text-break fw-bold text-decoration-none">
                                  <?php echo $list['name'] ?>
                                </a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php } else {
              echo "No Book Found in this category";
            } ?>
        </main>
    </div>
</div>
<?php require('footer.php') ?>

