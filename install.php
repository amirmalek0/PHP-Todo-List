<?php include("db.php"); ?>
<?php
$Header = 'Database Installation';
include("parts/header.php"); ?>

<?php


if (ItemExist() == true){?>

<div class="col-md-12 dbok">
    <i class="fa-regular fa-circle-exclamation"></i>
    <h1> Database Already Installed </h1>
    <a href="<?php echo SITEURL ?>" class="btn btn-danger">Back to Home</a>

    <?php }
else{


$sqlSource = file_get_contents('todo.sql');
$result = mysqli_multi_query($mysqli,$sqlSource);
if($result){
    ?>

    <div class="col-md-12 dbok">
        <i class="fa-solid fa-check"></i>
        <h1> Database Installed Successfully </h1>
        <a href="<?php echo SITEURL ?>" class="btn btn-danger">Back to Home</a>

    </div>

    <?php
}else {  ?>
    <div class="col-md-12 dbnok">
        <i class="fa-solid fa-xmark"></i>
        <h1> Database Installation Failed </h1>
        <p>Could not establish connection with database. Please Double Check "db.php" File</p>
        <a href="<?php echo SITEURL ?>" class="btn btn-success">Back to Home</a>

        <?php
}}
?>