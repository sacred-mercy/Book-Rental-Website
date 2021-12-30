<!--<footer id="footer" class="foot">-->
<!--    <div class="copyright">-->
<!--        © Copyright <strong><span>Book Rental</span></strong-->
<!--        >. All Rights Reserved-->
<!--    </div>-->
<!--</footer>-->
<footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2021 Book Rental</p>
    <ul class="list-inline">
        <li class="list-inline-item"><a href="aboutUs.php">About Us</a></li>
        <li class="list-inline-item"><a href="termsAndCondition.php">Terms and conditions</a></li>
      <?php
        if (isset($_SESSION['USER_LOGIN'])) {
        } else {
          echo '<li class="list-inline-item"><a href="Admin\login.php">Admin Login</a></li>';
        }
      ?>


    </ul>
</footer>
<!-------------------------------------------------SCROLL UP BUTTON------------------------------------------------------------>
<div id="scrollBtn">
    <button onclick="topFunction()" id="ScrollUpBtn" title="Go to top">
        <span> <i class="fas fa-chevron-up text-white"></i></span>
    </button>
    <script>
        let mybutton = document.getElementById("ScrollUpBtn");

        window.onscroll = function () {
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
