<?php

$title='upload Picture';
$cms="<form action='' method='post' enctype='multipart/form-data'>"
        . "<label for='file'>FileName</label>"
        . "<input type ='file' name='file' class='form-control'>"
        . "<input type='submit' name='submit' class='btn btn-primary btn-block'>"
        . "</form>";
        if(isset($_POST['submit'])){
            $filetype=$_FILES['file']['type'];
            if(($filetype=="image/gif")||($filetype=="image/png")||($filetype=="image/jpg")||($filetype="image/svg")){
                if(file_exists("image/".$_FILES['file']['name'])){
                    echo"<script type='text/javascript'>"
                    . "alert('Image Is Already Exist!!! Please Try Again With New Name Or image');"
                    . "</script>";
                }
                else{
                    move_uploaded_file($_FILES['file']['tmp_name'], "image/".$_FILES['file']['name']);
                    echo"<script type='text/javascript'>"
                     . "alert('Image Is Uploaded Yippee');"
                     . "</script>";
                }
            }
        }
        include 'cmstemplate.php';
        ?>