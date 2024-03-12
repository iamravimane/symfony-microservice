<?php 

include_once('includes/GuestLogin.php');
?>

<main class="form-signin">
<div class="col-lg-4 mx-auto p-3 py-md-5">
  <form>
    <img class="mb-4" src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg
" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please sign up</h1>
    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="First Name">
      <label for="floatingInput">First Name</label>
    </div>
    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="Last Name">
      <label for="floatingInput">Last Name</label>
    </div>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
    <div class="form-floating">
      <input type="confirm-password" class="form-control" id="floatingConfirmPassword" placeholder="Confirm Password">
      <label for="floatingConfirmPassword">Confirm Password</label>
    </div>

    <button class="w-100 btn btn-lg btn-primary mt-1" type="submit">Sign in</button>
    <button class="w-100 btn btn-lg btn-primary mt-1" type="submit">Sign up</button>
   
  </form>
</div>
</main>

<?php

include_once('includes/Footer.php');