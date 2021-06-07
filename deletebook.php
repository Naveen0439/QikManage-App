<?php
require "session.php";
require "connection.php";
if(isset($_GET['id'])){
    if(mysqli_query($mysql,"delete from books where ID=".$_GET['id'])){
        echo "<script>
        alert('Deleted')
        window.location.href='books.php';
        </script>";
    }
}
?>