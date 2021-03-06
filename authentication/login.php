<?php include('application.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      rel="stylesheet"
      type="text/css"
      href="../assets/stylesheets/reset.css"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    <script
      src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>
    <link
      rel="stylesheet"
      type="text/css"
      href="../../assets/stylesheets/registration.css"
    />
  </head>
  <body>
    <section class="registration">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xs-12 w-50">
            <div class="form-wrap">
              <h1>Please Sign In</h1>
              <h3 class="subtitle">You can't continue without signing in</h3>
              <form method="post" action="login.php">
                <?php include('errors.php'); ?>
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" name="username" class="form-control" />
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="password" class="form-control" />
                </div>
                <div class="form-group">
                  <button
                    type="submit"
                    class="btn btn-custom btn-lg btn-block"
                    name="login"
                  >
                    Login
                  </button>
                </div>
                <p>Not a member? <a href="register.php">Sign up</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
