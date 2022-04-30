<?php include("db.php")?>
<?php
$Header = "Create To-Do";
include("parts/header.php") ?>
<?php include("create.php") ?>
<?php if(ItemExist() == false) {
header('Location:'.SITEURL.'/install.php');
} ?>

<body>
    <div class="container">
        <div class="row">
            <?php include("parts/add_new.php") ?>
            <?php include("parts/todo_list.php") ?>
        </div>
        <a class="btn btn-dark github" href="https://github.com/amirmalek0" target="_blank"><i
                class="fa-brands fa-github"></i> Follow on GitHub </a>
    </div>


    <?php include("parts/footer.php") ?>