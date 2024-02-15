<!-- agencysignup -->
<?php require 'shared/header.php';?>
<?php require 'shared/toast.php';?>
<?php
if (isset($_POST['submit'])) {
    //add err variables
    $agencyNameErr = $emailErr = $passwordErr = $phoneErr = $addressErr = 'a';

    // __ basic input validation
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = filter_var($data, FILTER_SANITIZE_SPECIAL_CHARS);
        return $data;
    }

    $agencyName = test_input($_POST['agencyName']);
    $email = test_input($_POST['email']);
    $password = test_input($_POST['password']);
    $phone = test_input($_POST['phone']);
    $address = test_input($_POST['address']);
    // required is handled by the browser
    // add other kinds of checks [LATER]

    // __ connect to db and store
    // !pass values in quotes
    $sql = "INSERT INTO `agency` (`id`, `agency_name`) VALUES (NULL, '$agencyName');";
    try {
        if ($conn->query($sql) == true) {
            toast("New record created successfully");
            header('Location: index.php');
        }
    } catch (Exception $th) {
        // die('Connection failed: ' . $conn->connect_error);
        $err = 'ERROR<br>' . substr($th, 0, 50) . '...';
        toast($err);
    }
}
?>

<div class="container">
  <div id='form' class="form-container-2 card mx-auto px-3 mb-5">
    <form method='POST' action='<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>' class='card-body mt-3' id='form'>
      <h2 class="h2 mb-6">Agency Signup</h2>

      <div class="mb-4 input-block">
        <label for="agencyName" class="form-label fw-semibold">Agency name</label>
        <input type="text" name='agencyName' class="form-control" id="agencyName" placeholder="eg. cars101" required>
        <p class="invalid-feedback d-block">
          <?php echo $agencyNameErr ?? null; ?>
        </p>
      </div>

      <div class="mb-4 input-block">
        <label for="email" class="form-label fw-semibold">Email</label>
        <input type="email" name='email' class="form-control" id="email" placeholder="eg. cars101@outlook.com" required>
        <p class="invalid-feedback d-block">
          <?php echo $emailErr ?? null; ?>
        </p>
      </div>

      <div class="mb-4 input-block">
        <label for="password" class="form-label fw-semibold">Password</label>
        <input type="password" name='password' class="form-control" id="password" placeholder="eg. *******" required>
        <p class="invalid-feedback d-block">
          <?php echo $passwordErr ?? null; ?>
        </p>
      </div>

      <div class="mb-4 input-block">
        <label for="phone" class="form-label fw-semibold">Contact number</label>
        <input type="phone" name='phone' class="form-control" id="phone" placeholder="enter a 10 digit mob number"
          pattern="[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]" required>
        <p class="invalid-feedback d-block">
          <?php echo $phoneErr ?? null; ?>
        </p>
      </div>

      <div class="mb-4 input-block">
        <label for="address" class="form-label fw-semibold">Address</label>
        <textarea class="form-control" id="address" name='address' rows="3" placeholder="eg. 308 ABQ, New Mexico"
          required></textarea>
        <p class="invalid-feedback d-block">
          <?php echo $addressErr ?? null; ?>
        </p>
      </div>


      <!-- <div class="mb-4">
        <label for="formGroupExampleInput2" class="form-label fw-semibold">Password</label>
        <input type="password" name='password' class="form-control" id="formGroupExampleInput2"
          placeholder="Enter your password">
      </div>
      <div class="mb-4">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault">
            I am not a robot
          </label>
        </div>

      </div> -->

      <div class="mt-5">
        <button type="submit" name='submit' id='submit' class="btn btn-dark btn-md mb-4 w-100">Signup</button>
      </div>

    </form>

  </div>
</div>

<?php require 'shared/footer.php';?>