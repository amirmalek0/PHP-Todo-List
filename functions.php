<?php

function GetData() {
    global $mysqli;
    global $result;
    $query = "SELECT * FROM items ORDER BY id DESC";
    $result = mysqli_query($mysqli, $query);
    return $result;
}
function GetData_With_ID(){
    global $mysqli;
    global $result;
    $id = $_GET['id'];
    $query = "Select * FROM items WHERE ID = $id";       
    $result = mysqli_query($mysqli,$query);
}

function Create(){
    global $mysqli;
    $title = $_POST['td-title'];
    $desc  =  $_POST['td-desc'];
    $query = "INSERT into items(title,description)";
    $query.= "VALUES('$title','$desc')";

   $create =  mysqli_query($mysqli , $query);

   if ($create){
    echo "<script>
    
    Swal.fire({
        icon: 'success',
        title: 'Item added successfully',
        showConfirmButton: false,
        timer: 1500
      })

    </script>";
    
   }else {
       
       echo "<script>Swal.fire({
        icon: 'error',
        title: 'Database Problem!',
        showConfirmButton: false,
        timer: 1500
      })

    </script>";
   }
}

function Delete(){
    global $mysqli;
    $id = $_GET['id'];
    $query = "DELETE FROM items WHERE ID = $id";       
    $result = mysqli_query($mysqli,$query);
    if($result) {
  
        header('Location:'. SITEURL);
    } else {
        echo "Error";
    error_reporting(E_ALL ^ E_DEPRECATED);
    }
}

function Edit(){
    global $mysqli;
    $title = $_POST['td-title'];
    $desc  =  $_POST['td-desc'];
    $id = $_POST['id'];

   
    $query = "UPDATE items SET ";
    $query.= "title = '$title', ";
    $query.= "description = '$desc' ";
    $query.= "WHERE id = $id ";
    $create =  mysqli_query($mysqli , $query);

}

function ItemExist(){
    global $mysqli;
    $query = "SHOW TABLES LIKE 'items'";
    $result = mysqli_query($mysqli, $query);
    $count = $result->num_rows;
    if($count == 0){
        return false;
    }else{
        return true;
    }
}