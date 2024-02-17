<?php require 'shared/header.php';?>
<?php require 'shared/toast.php';?>


<?php 
 $agencyName = 'cars201';
 $email = 'cars201@email.com';
 $password = 'cars201';
 $phone = 1234567891;
 $address = '201, cars, newDelhi';

$sql = "INSERT INTO `agency` (`agency_id`, `agency_name`, `email`, `password`, `phone`, `address`, `cars_owned`, `cars_booked`) VALUES (NULL,'$agencyName', '$email', '$password', '$phone', '$address', NULL, NULL)";

$sql2 = 'SELECT * FROM `agency`';

try {
  $result = $conn->query($sql2);
  if ($conn->query($sql) == true) {
    toast('New record created successfully');
    foreach(($result->fetch_assoc()) as $key=>$val)
    echo $key.':'.$val.'<br>';

    }
  } catch (Exception $th) {
    // die('Connection failed: ' . $conn->connect_error);
    echo $th;
    $err = 'ERROR<br>' . substr($th, 0, 50) . '...';
    toast($err);
  }
  ?>

<?php require 'shared/footer.php';?>