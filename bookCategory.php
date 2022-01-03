<?php require('header.php');
$categoryId = '';
if (isset($_GET['id'])) {
    $categoryId = mysqli_real_escape_string($con, $_GET['id']);
}
$getProduct = getProduct($con, '', $categoryId);
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
        <a href="#" data-bs-target="#sidebar" data-bs-toggle="collapse" class="fs-5 p-1 mt-2 text-decoration-none"><i
                class="fas fa-bars py-2 p-1"></i>Category Menu</a>
        <div class="col-auto px-0">
            <div id="sidebar" class=" collapse-horizontal">
                <div id="sidebar-nav" class="text-sm-start min-vh-100">
                    <h3 class="text-decoration-none text-dark px-2 fs-4  d-flex justify-content-center"
                        data-bs-parent="#sidebar"><span class="">Categories</span></h3>
                    <ul class="nav flex-column">
                        <?php foreach ($catArr as $list) { ?>
                        <li>
                            <a class="nav-link  link-dark " aria-current="page"
                                href="bookCategory.php?id=<?php echo $list['id'] ?>">
                                <?php echo $list['category'] ?> </a>
                        </li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>

        <main class=" ms-sm-auto col ps-md-2 pt-2 px-md-4">
            <?php
            if (count($getProduct) > 0) {
            ?>
            <div class="row gy-3 text-center d-flex justify-content-start flex-wrap ms-3">
                <?php foreach ($getProduct as $list) { ?>
                <div class="col-6 col-md-4 col-lg-3 ">
                    <div class="card border-dark mt-3 shadow-sm product">
                        <img id="card-img" alt="Book Image" src="<?php echo BOOK_IMAGE_SITE_PATH . $list['img'] ?>"
                            class="card-img-top rounded" height="356rem" width="60rem" />
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