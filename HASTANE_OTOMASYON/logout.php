<!-- çıkış yapma işlemlerini sağlayan php kodları -->

<?php 

session_start();
session_destroy();

header('location:index.php?exit'); 


?>