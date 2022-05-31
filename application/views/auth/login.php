<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/css/login.css')?>">
    <title>Login User</title>
  </head>
  <body class="text-center">
  
    <form class="form-signin" method="post" action="<?= base_url('auth/login')?>">
      <img class="mb-4" src="<?= base_url('assets/img/logo.png')?>" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <?= form_error('identity', '<div class="error">', '</div>');?>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" name="identity" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
      <?= form_error('password', '<div class="error">', '</div>');?>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password"  name="password" id="inputPassword" class="form-control" placeholder="Password" required>
      <div class="checkbox mb-3">
        <label>
          <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <button class="btn btn-primary btn-block">
        <a href="forgot_password" class="text-white"><?php echo lang('login_forgot_password');?></a>
      </button>
      <p class="mt-5 mb-3 text-muted">&copy; <?= date('Y')?></p>
    </form>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>