<?php
require "session.php";
require "connection.php";
if($_SESSION['role']=='admin'){
if(isset($_GET['id'])){
    $query="update leaves set  approved_on=current_date(), isapproved=1 where id=".$_GET['id'];
    if(mysqli_query($mysql,$query)){
        echo "<script>window.history.back();</script>";
    }
}
if(isset($_GET['unapprove'])){
    $query="update leaves set  approved_on='', isapproved=2 where id=".$_GET['unapprove'];
    if(mysqli_query($mysql,$query)){
        echo "<script>window.history.back();</script>";
    }
}

}
else{
    echo '<script>alert("You are not authorised")
    window.history.back();
    </script>';
}

?>