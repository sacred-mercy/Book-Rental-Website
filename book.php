<?php require('header.php') ?>
<?php
  $bookId = '';
  if (isset($_GET['id'])) {
    $bookId = mysqli_real_escape_string($con, $_GET['id']);
  }
  $getProduct = getProduct($con, '', '', $bookId);


?>
    <script>
        document.title = "<?php echo $getProduct['0'] ['name'] ?> | Book Rental";
    </script>
    <div class="container-fluid py-5">
        <div class="row mb-3">
            <div class="col-3 mt-3">
                <img class="card border-dark rounded"
                     src="<?php echo BOOK_IMAGE_SITE_PATH . $getProduct['0'] ['img'] ?>"
                     height="396rem" width="260rem">
            </div>
            <div class="col-9">
                <h2 id="bookName" class="text-uppercase font-weight-bold"><?php echo $getProduct['0'] ['name'] ?></h2>
                <hr>
                <h6>ISBN:- <span class="fw-normal"><?php echo $getProduct['0'] ['ISBN'] ?></span></h6>
                <h6>Author:- <span class="fw-normal"><?php echo $getProduct['0'] ['author'] ?></span></h6>
                <p></p>
                <p>
                    <span class="fs-4 fw-bolder">₹<?php echo $getProduct['0'] ['rent'] ?></span><span
                            class="fs-5"><strong>(Per Day)</strong></span>
                </p>
                <!--                    <span>(+₹--><?php //echo $getProduct['0'] ['security'] ?><!-- <abbr-->
                <!--                                title="refund on book return">Security Charges</abbr>)</span> MRP- <span>₹-->
                <!--          --><?php //echo $getProduct['0'] ['mrp'] ?><!--</span>-->
                <div class="d-flex">
                    <a href="checkout.php?id=<?php echo $getProduct['0'] ['id'] ?>" type="submit"
                       class="btn-primary btn">Rent</a>
                    <!--                    <div class="d-flex ms-2">-->
                    <!--                        <p class=""> For </p>-->
                    <!--                        <select>-->
                    <!--                            <option disabled>Select No. of days to rent</option>-->
                    <!--                            <option></option>-->
                    <!--                        </select>-->
                    <!--                        <p>Days</p>-->
                    <!--                    </div>-->
                </div>

                <h6 class="fw-bold fs-5 my-3">Short Description</h6>
                <p id="shortDescription"
                   class="mt-3 text-justify">
                  <?php echo $getProduct['0'] ['short_desc'] ?></p>
            </div>
        </div>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne"
                            aria-expanded="true" aria-controls="collapseOne">
                        <h6 class="fs-5 ms-4">Description</h6>
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                     data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p id="description" class="mb-3 text-justify"><?php echo $getProduct['0'] ['description'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php require('footer.php') ?>