<?php 
include("../../config.php");
if(isset($_POST['name']) && isset($_POST['username'])) {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $date = date("Y-m-d");
    $query = mysqli_query($con, "INSERT INTO playlists (`name`, `owner`, `dateCreated`) VALUES ('$name', '$username', '$date')");
}
else {
    echo "Name or username parametes are not passed into file";
}
?>