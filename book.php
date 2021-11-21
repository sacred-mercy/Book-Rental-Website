<?php require('header.php') ?>
<?php
  $bookId = '';
  if (isset($_GET['id'])) {
    $bookId = mysqli_real_escape_string($con, $_GET['id']);
  }
  $getProduct = getProduct($con, '', '', $bookId);
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-3 py-4">
            <img src="Img/books/mostViewed1.png" height="300rem">
        </div>
        <div class="col-9 py-4">
            <h2 id="bookName" class="text-uppercase font-weight-bold">Book name</h2>
            <h6>ISBN </h6>
            <h6>AUTHOR </h6>
            <p id="shortDescription"> Maharajah</p>
            <p id="description"> non no</p>

        </div>
    </div>
</div>

<?php require('footer.php') ?>

