<footer class="footer-main">

    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3 address-main">
                    <div class="lgoo">
                        <a href="#"><img src="assets/images/logo.png" alt=""></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo cte irure dolor in repre</p>
                        <ul>
                            <li>Socail Links</li>
                            <li><i class="bx bxl-facebook"></i></li>
                            <li><i class="bx bxl-instagram"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 ct_ftr_navi">
                    <div>
                        <h4>Quick Links</h4>
                        <ul class="footer-nav">
                            <li><a href="">Home</a></li>
                            <li><a href="">About us</a></li>
                            <li><a href="">Shop </a></li>
                            <li><a href="">Testimonial</a></li>
                            <li><a href="">Contact us</a></li>
                        </ul>
                    </div>

                </div>
                <div class="col-sm-6 col-lg-3 ct_ftr_navi">
                    <h4>Help</h4>
                    <ul class="footer-nav">
                        <li><a href="">Shipping End Refund</a></li>
                        <li><a href="">Warranty</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3 ct_ftr_navi">
                    <div class="top-content">
                        <h4>Contact us</h4>
                        <ul class="footer-nav">
                            <a href="#">Contact@cammart.com</a>
                            <a href="#">626-478-5089 </a>
                            <a href="#">www.ergoart.us</a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>








</main>
<script src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/slick.js"></script>
<script type="text/javascript" src="assets/js/jquery.fancybox.min.js"></script>
<script type="text/javascript" src="assets/js/wow.js"></script>
<script type="text/javascript" src="assets/js/functions.js"></script>

<script>
    // Get the current page URL
var currentPageURL = window.location.href;

// Get all menu links
var menuLinks = document.querySelectorAll('.menu a');

// Loop through the menu links
for (var i = 0; i < menuLinks.length; i++) {
  var link = menuLinks[i];
  var linkURL = link.href;

  // Check if the link URL matches the current page URL
  if (currentPageURL === linkURL) {
    // Add a class to make the link bold
    link.classList.add('active');
  }
}
</script>


</body>

</html>