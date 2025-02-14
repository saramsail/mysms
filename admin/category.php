<?php require 'config/gaurd.php'; ?>
  
<?php
include 'partacial/sidebar.php';
include 'partacial/header.php';
?>
        <!-- BEGIN PlACE PAGE CONTENT HERE -->
        <div class="page-content">
    <div class="content">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h2>Manage Category</h2>
        </div>
        <!-- END PAGE TITLE -->
        <!-- BEGIN PlACE PAGE CONTENT HERE -->
        <div class="col-md-14">
            <div class="grid simple ">
                <div class="grid-body no-border">
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <a href="#" id="activeAll" class="btn btn-primary tip" data-toggle="tooltip" title="Active Selected"><i class="fa fa-eye"></i></a>
                            <a href="#" id="deactiveAll" class="btn btn-primary tip" data-toggle="tooltip" title="Deactive Selected"><i class="fa fa-eye-slash"></i></a>
                            <a href="#" id="deleteAll" class="btn btn-primary tip" data-toggle="tooltip" title="Delete Selected"><i class="fa fa-trash"></i></a>
                            <a href="add_category.php" class="btn btn-primary tip" data-toggle="tooltip" title="Create"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                        
                    <br>
                       <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th style="width:1%">
                                    <div class="checkbox check-default">
                                        <input id="checkbox" type="checkbox" value="1" class="checkall">
                                        <label for="checkbox"></label>
                                    </div>
                                </th>
                                <th style="width:40%">Title</th>
                                <th style="width:10%">Status</th>
                                <th style="width:10%">Manage</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                require 'config/dbc.php';
                                $qurey = mysqli_query($connection, "SELECT * FROM category") or die(mysqli_error($connection));
                                while($row = mysqli_fetch_array($qurey))  {
                            ?>
                            <tr>
                                <td>
                                    <div class="checkbox check-default">
                                        <input id="checkbox" type="checkbox" value="1" class="checkall">
                                        <label for="checkbox"></label>
                                    </div>
                                </td>
                                <td><?php echo $row['title']; ?></td>
                                <td>
                                    <?php if ($row['status'] =='DEACTIVE') : ?>
                                 <a href="category_status.php?id=<?php echo $row['id']; ?>" > <span class="label label-important btn-small"><i class="fa fa-thumbs-o-down"></i></span></a>
                                 <?php else : ?>
                                 <a href="category_status.php?id=<?php echo $row['id']; ?>"> <span class="label label-info btn-small"><i class="fa fa-thumbs-o-up"></i></span> </a>
                                 <?php endif; ?>
                                </td>
                                <td>
                                    <a href="edit_category.php?id=<?php echo $row['id']; ?>" class="label label-info"> <i class="fa fa-edit"></i></a>
                                    <a href="delete_category.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure to delet to this?')" class="label label-important "> <i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- END PLACE PAGE CONTENT HERE -->
    </div>
</div>
        <!-- END PLACE PAGE CONTENT HERE -->
    </div>
</div>
     <!-- END PAGE CONTAINER -->
</div>
<!-- END CONTENT --> 
</body>
</html>

