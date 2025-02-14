<!-- begin header here -->
<?php include 'partials/header.php' ?>

<div id="body">
    <section id="content">
        <article>
            <h2>Gallery</h2>
            <hr>
            <ul class="list-inline">
                <?php 
                    require_once 'config/dbc.php';
                    $getAllGalleries = mysqli_query($connection, "SELECT * FROM media WHERE status='ACTIVE' AND media_type='gallery'") or die(mysqli_error($connection));
                    while ($viewAllGalleries = mysqli_fetch_array($getAllGalleries)) {
                ?>	
                    <li class="list-inline-item"><a href="uploads/<?php echo $viewAllGalleries['media_img'] ?>" data-lightbox="roadtrip"><img src="uploads/<?php echo $viewAllGalleries['media_img'] ?>" width="100" height="100" class="img-thumbnail" alt="<?php echo $viewAllGalleries['title']; ?>"></a></li>
                <?php } ?>

            </ul>		
        </article>
    </section>
    
    <!-- begin sidebar here -->
    <?php include 'partials/sidebar.php' ?>
</div>
<!-- begin footer here -->
<?php include 'partials/footer.php' ?>