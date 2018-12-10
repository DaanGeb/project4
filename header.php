<div class="header">Colicss</div>

<div class="topnav" id="myTopnav"><!--Menubalk-->
    <a href="index.php" class="active">Home</a>

    <div class="dropdown">
        <button class="dropbtn">Hosting<i class="fa fa-caret-down"></i></button>
        <div class="dropdown-content">
            <a href="hosting.php">Hosting Pakketten</a>
        </div>
    </div>

    <div class="dropdown">
        <button class="dropbtn">Cloud<i class="fa fa-caret-down"></i></button>
        <div class="dropdown-content">
            <a href="cloud.php">Cloud Pakketten</a>
        </div>
    </div>

    <a href="contact.php">Contact</a>

    <a href="klanten.php">Klanten</a>

    <a href="media.php">Foto's</a>

    <a href="twitterfeed.php">Twitter Feed</a>

    <a class="dgreen" style="float:right;" href="about.php">Over ons</a>

    <a style="float:right" href="https://facebook.com" class="fa fa-facebook"></a>
    <a style="float:right" href="https://twitter.com" class="fa fa-twitter"></a>

    <a href="javascript:void(0);" class="icon" onclick="responsive()">
        <i class="fa fa-bars"></i>

    <script>

        function responsive() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }

    </script>
        <script>
            window.onscroll = function() {myFunction()};

            var myTopnav = document.getElementById("myTopnav");
            var sticky = myTopnav.offsetTop;

            function myFunction() {
                if (window.pageYOffset >= sticky) {
                    myTopnav.classList.add("sticky");
                } else {
                    myTopnav.classList.remove("sticky");
                }

            }
        </script>
    </a>
</div>
