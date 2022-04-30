<?php include("db.php"); ?>
<?php
$Header = "Edit To-Do";
include("parts/header.php")
?>

<body>
    <div class="container">
        <div class="row">

            <?php include("parts/edit_todo.php") ?>
            <?php include("parts/todo_list.php") ?>

        </div>
    </div>


    <?php include("parts/footer.php") ?>