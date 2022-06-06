<?php
    session_start();
    if(isset($_SESSION["path"])){
        $targetPath =  $_SESSION["path"].basename($_FILES["inpFile"]["name"]);
        move_uploaded_file($_FILES["inpFile"]["tmp_name"],$targetPath);
    }
?>