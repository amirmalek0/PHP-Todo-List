<?php
            if (isset($_POST['td-title'])){
               Edit();
            }
            ?>

            <?php if (isset($_GET['id'])){
            GetData_With_ID();
      while($row = mysqli_fetch_assoc($result)) {
 ?>
            <div class="col-md-7">
                <h1><i class="fa-regular fa-pen-to-square"></i> Edit To-Do Task</h1>
                <form action="<?php echo SITEURL ?>/edit.php" method="POST">
                    <div class="form-group">
                        <label for="td-title">Title:</label>
                        <input name="td-title" class="form-control" id="td-title" value="<?php echo $row['title']?>" required>
                        <small id="titleHelp" class="form-text text-muted">Edit the title for your To-Do.</small>
                    </div>
                    <div class="form-group">
                        <label for="td-desc">Description:</label>
                        <textarea class="form-control" name="td-desc"
                            rows="3" required><?php echo $row['description']?></textarea>
                    </div>
                    <input type="hidden" name="id" value="<?php echo $row['id']?>">

                    <button type="submit" class="btn btn-warning">Update To-Do Task</button>
                    <a class="btn btn-danger" href="<?php echo SITEURL ?>"> Cancel </a>


                </form>
            </div>

            <?php }}else {
    header("Location:". SITEURL);
} ?>
