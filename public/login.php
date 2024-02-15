<!-- LOGIN -->
<?php require 'shared/header.php';?>
<div class="container">
  <div id='form' class="form-container card mx-auto px-3">
    <form action="" class='card-body mb-6 mt-3'>
      <h2 class="h2 mb-6">Login</h2>
      <div class="mb-4">
        <label for="formGroupExampleInput" class="form-label fw-semibold">Email</label>
        <input type="email" name='email' class="form-control" id="formGroupExampleInput" placeholder="Enter your email">
      </div>
      <div class="mb-4">
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

      </div>
      <div class="mt-5">
        <button type="button" id='btn-user' form='form' class="btn btn-md  btn-dark  mb-4 w-100">Login as user</button>
        <button type="button" id='btn-agency' form='form' class="btn btn-outline-dark  ms-auto btn-md w-100">Login
          as
          agent</button>
      </div>

    </form>

  </div>
</div>

<?php require 'shared/footer.php';?>