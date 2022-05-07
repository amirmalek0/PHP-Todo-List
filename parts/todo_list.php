<div class="col-md-5 bg-dark text-white rounded-lg border pd-20 todo">
                <h1><i class="fa-light fa-list"></i> My To-Do List</h1>

                <?php 
                    GetData();
                    if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        ?>
                <div class="row">
                    <div class="col-md-9">
                        <h5><?php echo $row['title'] ?></h5>
                    </div>
                    <div class="col-md-3">
                        <div class="actions">
                            <a href="<?php echo SITEURL ?>/delete.php?id=<?php echo $row['id'] ?>" title="Delete"><i
                                    class="fa-solid fa-trash-can-check"></i> </a>
                            <a href="<?php echo SITEURL ?>/edit.php?id=<?php echo $row['id'] ?>" title="Edit"><i
                                    class="fa-solid fa-pen-to-square"></i> </a>
                        </div>

                    </div>
                </div>
                <p><?php echo $row['description'] ?></p>
                <hr style="background:white;">

                <?php }} else { ?>
                <div class="empty-data">
                    <i class="fa-light fa-notes fa-5x"></i>
                    <h2>There is no data to show.</h2>
                </div>
                <?php } ?>



            </div>