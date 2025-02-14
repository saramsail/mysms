<footer>
        <div class="footer-content">
            <ul>
            	<li><h4>Categories</h4></li>
                <?php 
                    require_once 'config/dbc.php';
                    $getAllCategories = mysqli_query($connection, "SELECT * FROM category WHERE status='ACTIVE' LIMIT 5") or die(mysqli_error($connection));
                    while ($viewAllCategories = mysqli_fetch_array($getAllCategories)) {
                ?>
                    <li><a href="category.php?id=<?php echo $viewAllCategories['id']; ?>"><?php echo $viewAllCategories['title']; ?></a></li>
                <?php } ?>
            </ul>
            
            <ul>
            	<li><h4>Latest SMS</h4></li>
                <?php 
                    require_once 'config/dbc.php';
                    $getLastessms = mysqli_query($connection, "SELECT * FROM massage WHERE status='ACTIVE' ORDER BY id DESC LIMIT 5") or die(mysqli_error($connection));
                    while ($viewLastessms = mysqli_fetch_array($getLastessms)) {
                ?>
                    <li><a href="sms.php?id=<?php echo $viewLastessms['id']; ?>"><?php echo $viewLastessms['title']; ?></a></li>
                <?php } ?>
            </ul>
            
            <ul class="endfooter">
            	<li><h4>Follow Us</h4></li>
                <li><a href="#">Facebook </a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Linked In</a></li>
                <li><a href="#">Pinterest</a></li>
                <li><a href="#">YouTube</a></li>
            </ul>
            
            <div class="clear"></div>
        </div>
        <div class="footer-bottom">
            <p>&copy; YourSite 2022. by Students of AFA</p>
         </div>
    </footer>
    </div>
    <script src="assets/js/jquery-3.7.1.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/lightbox/dist/js/lightbox.min.js"></script>
<script>
    lightbox.option({
      'resizeDuration': 200,
      'wrapAround': true
    })
</script>
</body>
</html>