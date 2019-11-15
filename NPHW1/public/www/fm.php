<?php
if($_FILES["file"]["error"]>0)
{
    echo "error number:".$_FILES["file"]["error"]."<br />";
}
else
{
    echo "name:".$_FILES["file"]["name"]."<br />";
    echo "type:".$_FILES["file"]["type"]."<br />";
    echo "size:".$_FILES["file"]["size"]."byte<br />";
    echo "temporary name:".$_FILES["file"]["tmp_name"]."<br />";

    if(file_exists("upload/".$_FILES["file"]["name"]))
    {   echo "unable to upload file: file has existed.";}
    else
    {   move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$_FILES["file"]["name"]);}
}
?>
