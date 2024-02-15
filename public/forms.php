<!-- forms.php-practice -->
<?php
/* 3 things here: GET/POST, input-filtering, $_SERVER global actions */


// $_GET AND $_POST
// $_GET - unsecure, data stays in the url, use for search
// $_POST - more secure, use for everything else

// echo '<br>' . $_SERVER['PHP_SELF'];
// echo '<br>' . $_SERVER['SERVER_NAME'];
// echo '<br>' . $_SERVER['HTTP_HOST'];
// echo '<br>' . $_SERVER['HTTP_REFERER'];
// echo '<br>' . $_SERVER['HTTP_USER_AGENT'];
// echo '<br>' . $_SERVER['SCRIPT_NAME'];

// if (isset($_GET['name'])) {
// echo 'From GET '.$x;
// }
if (isset($_POST['submit'])){
  // sanitize inputs here
  // just use htmlspecialchars

  
  $name = filter_var($_POST['name'],FILTER_SANITIZE_SPECIAL_CHARS);
  $n = htmlspecialchars($_POST['name']);
  $p = htmlspecialchars($_POST['password']);
// remember empty strings are considered valid inputs
echo 'From POST '.$n.$p.$name;

}else
echo null;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <!-- submit to the same site -->
  <!-- as submitting to another site results in a redirect, to prevent that we would need to use AJAX -->
  <form action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>' method='POST' >
    <label for="name">Name: </label>
    <input type="text" name="name" id="name">

    <label for="password">Password: </label>
    <input type="password" name="password" id="password">

    <input type="submit" name="submit" value="Submit">
  </form>
</body>
</html>