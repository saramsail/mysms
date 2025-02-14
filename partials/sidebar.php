<aside class="sidebar">
	
    <ul>	
       <li>
            <h4>Categories</h4>
            <ul>
            <?php 
                    require_once 'config/dbc.php';
                    $getAllCategories = mysqli_query($connection, "SELECT * FROM category WHERE status='ACTIVE'") or die(mysqli_error($connection));
                    while ($viewAllCategories = mysqli_fetch_array($getAllCategories)) {
                ?>
                    <li><a href="category.php?id=<?php echo $viewAllCategories['id']; ?>"><?php echo $viewAllCategories['title']; ?></a></li>
                <?php } ?>
            </ul>
        </li>
        
        <li>
            <h4>Latest SMS</h4>
            <ul>
            <?php 
                    require_once 'config/dbc.php';
                    $getLastessms = mysqli_query($connection, "SELECT * FROM massage WHERE status='ACTIVE' ORDER BY id DESC LIMIT 8") or die(mysqli_error($connection));
                    while ($viewLastessms = mysqli_fetch_array($getLastessms)) {
                ?>
                    <li><a href="sms.php?id=<?php echo $viewLastessms['id']; ?>"><?php echo $viewLastessms['title']; ?></a></li>
                <?php } ?>
            </ul>
        </li>
        <li>
            <h4>SMS of the Day</h4>
            <ul>
                <?php 
                    require_once 'config/dbc.php';
                    $getRandomSMS = mysqli_query($connection, "SELECT * FROM massage WHERE status='ACTIVE' ORDER BY rand() LIMIT 1 ") or die(mysqli_error($connection));
                    $viewRandomSMS = mysqli_fetch_array($getRandomSMS);
                ?>
                <li><p><?php echo $viewRandomSMS['content']; ?></p></li>
            </ul>
        </li>
        
        <li>
            <h4>Search site</h4>
            <ul>
                <li class="text">
                    <form method="get" class="searchform" action="search.php" >
                        <p><input type="text" size="30" value="" name="q" id="q" class="s" /></p>
                        <p><input type="submit" value="Search"></p>
                    </form>	
                </li>
            </ul>
        </li>
        
    </ul>

</aside>
<div class="clear"></div>