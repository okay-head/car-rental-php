<?php require 'shared/header.php';?>
<?php require 'shared/footer.php';?>


<?php 
$sql = "INSERT INTO `agency` (`agency_id`, `agency_name`, `email`, `password`, `phone`, `address`, `cars_owned`, `cars_booked`) VALUES (NULL, \'cars101\', \'cars@101.com\', \'cars101\', \'1122334455\', \'123, hauz khaz, delhi\', \'{\\r\\n\\\"id\\\": 1,\\r\\n\\\"name\\\": \\\"Mclaren\\\"\\r\\n}\', \'{\\r\\n\\\"id\\\": 1,\\r\\n\\\"name\\\": \\\"Mclaren\\\"\\r\\n}\');";

$sql2 = "SELECT * FROM `agency`";


?>