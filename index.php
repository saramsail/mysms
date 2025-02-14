<!-- begin header here -->
<?php require 'partials/header.php' ?>


    <div id="body">
		<section id="content">
	    <article>
			<h2>Introduction to AFA Bulk SMS</h2>
			<p>Lorem ipsum, dolor sit amet consectetur adipisicing, elit. Commodi inventore necessitatibus distinctio dolore placeat sunt, eaque animi beatae minus odio eveniet ipsa suscipit nemo magni magnam excepturi minima assumenda odit repellendus aliquam, id? Doloremque consequatur rem eum sequi officiis aspernatur voluptatibus eius sunt vel possimus, </p>		
		</article>
		<?php 
				require_once 'config/dbc.php';
				$getLastessms = mysqli_query($connection, "SELECT * FROM massage WHERE status='ACTIVE' ORDER BY id DESC LIMIT 12") or die(mysqli_error($connection));
				while ($viewLastessms = mysqli_fetch_array($getLastessms)) {
            ?>
		<article class="expanded">
			<h2><?php echo $viewLastessms['title']; ?></h2>
			<div class="article-info">
				Posted on <time datetime="2013-05-14"><?php echo $viewLastessms['create_date']; ?></time> 
				Posted by <a href="#" rel="author">
				<?php 
					$member_id = $viewLastessms['member_id']; 
					$getMemberById = mysqli_query($connection, "SELECT * FROM member WHERE id=$member_id") or die(mysqli_error($connection));
					$viewMemberById = mysqli_fetch_array($getMemberById);
					echo $viewMemberById['fullname'];
				?>
				</a>
				Posted in <a href="#" rel="author">
				<?php 
				   $category_id = $viewLastessms['category_id']; 
				   $getCategoryById = mysqli_query($connection, "SELECT * FROM category WHERE id=$category_id") or die(mysqli_error($connection));
				   $viewCategoryById = mysqli_fetch_array($getCategoryById);
				   echo $viewCategoryById['title'];
				?>
				</a>
			</div>
			<p><?php echo substr($viewLastessms['content'], 0, 120); ?>...</p>
		<a href="sms.php?id=<?php echo $viewLastessms['id']; ?>" class="button">Read more</a>
		</article>
		<?php } ?>
        </section>

<!-- begin header here -->
  <?php require 'partials/sidebar.php' ?>

    </div>
    <!-- begin footer here -->
    <?php require 'partials/footer.php' ?>
