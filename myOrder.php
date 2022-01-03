<?php require('header.php') ?>
<?php
if (!isset($_SESSION['USER_LOGIN'])) {
    echo "<script>window.top.location='SignIn.php';</script>";
    exit;
}
if (isset($_GET['type']) && $_GET['type'] != ' ') {
    $type = getSafeValue($con, $_GET['type']);
    if ($type == 'cancel') {
        $id = getSafeValue($con, $_GET['id']);
        $deleteSql = "update orders set order_status='4' where id='$id'";
        mysqli_query($con, $deleteSql);

        $qtyRes = mysqli_query($con, "SELECT books.qty,books.id FROM orders
                                            JOIN order_detail ON orders.id=order_detail.order_id
                                            JOIN books ON order_detail.book_id=books.id
                                            where order_detail.order_id='$id'");
        $qtyRow = mysqli_fetch_assoc($qtyRes);
        $newQty = $qtyRow['qty'] + 1;
        $bookId = $qtyRow['id'];
        mysqli_query($con, "UPDATE books SET qty = '$newQty' WHERE id='$bookId';");
    }
}
?>
<script>
document.title = "My Orders | Book Rental";
</script>
<div class="container mt-5">
    <div class="d-flex justify-content-center">
        <h1>My Orders
            <hr>
        </h1>
    </div>
    <table class="table table-responsive">
        <thead class="">
            <tr>
                <th> OrderID</th>
                <th>Order Date</th>
                <th>Book Name</th>
                <th>Price</th>
                <th>Duration</th>
                <th>Address</th>
                <th>Payment Method</th>
                <th>Payment Status</th>
                <th>Order Status</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $userId = '';
            $userId = $_SESSION['USER_ID'];
            $res = mysqli_query($con, "select orders.*,name,status_name from orders
                                            JOIN order_detail ON orders.id=order_detail.order_id
                                            JOIN books ON order_detail.book_id=books.id
                                            JOIN order_status ON orders.order_status=order_status.id
                                            where user_id = $userId order by orders.id desc");
            while ($row = mysqli_fetch_assoc($res)) { ?>
            <tr>
                <td> #<?php echo $row['id'] ?> </td>
                <td> <?php echo $row['date'] ?> </td>
                <td> <?php echo $row['name'] ?> </td>
                <td> <?php echo $row['total'] ?> </td>
                <td> <?php echo $row['duration'] ?> </td>
                <td> <?php echo $row['address'] ?>, <?php echo $row['address2'] ?> </td>
                <td> <?php echo $row['payment_method'] ?> </td>
                <td> <?php echo $row['payment_status'] ?> </td>
                <td> <?php echo $row['status_name'] ?> </td>
                <td><?php if ($row['status_name'] === 'Cancelled' || $row['status_name'] === 'Returned') {
                        } else {
                            echo "<a class='link-white btn btn-danger px-2 py-1' href='?type=cancel&id=" . $row['id'] .
                                "'>Cancel</a>";
                        }
                        ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<div id="scrollBtn">
    <button onclick="topFunction()" id="ScrollUpBtn" title="Go to top">
        <span> <i class="fas fa-chevron-up text-white"></i></span>
    </button>
    <script>
    let mybutton = document.getElementById("ScrollUpBtn");

    window.onscroll = function() {
        scrollFunction();
    };

    function scrollFunction() {
        if (
            document.body.scrollTop > 20 ||
            document.documentElement.scrollTop > 20
        ) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
    </script>
</div>

<!--------------------------------------------------DARK MODE BUTTON----------------------------------------------------------->
<div id="dark-btn">
    <button onclick="DarkMode()" id="dark-btn" title="Toggle Light/Dark Mode">
        <span><i class="fas fa-adjust fa-lg text-white"></i></span>
    </button>
    <script>
    //Dark Mode
    function DarkMode() {
        let element = document.body;
        element.classList.toggle("dark-mode");
    }
    </script>
</div>
</body>

</html>