<?php  
$con = mysqli_connect('MySQL-8.2', 'root','','insta');
$query = mysqli_query($con, "UPDATE insta
SET TEXTS='{$_GET['TEXTS']}', IMG='{$_GET['IMG']}'
WHERE ID='{$_GET['ID']}'");
header("Location: index.php")
?>