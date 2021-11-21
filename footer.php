<!--<footer id="footer" class="foot">-->
<!--    <div class="copyright">-->
<!--        © Copyright <strong><span>Book Rental</span></strong-->
<!--        >. All Rights Reserved-->
<!--    </div>-->
<!--</footer>-->
<footer class="footer mt-auto py-3 bg-dark">
    <div class="container">

    </div>
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
</body>
</html>
