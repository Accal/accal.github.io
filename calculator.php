<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: registration/login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: registration/login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!--
        Name: Ammar Rahic
        Course: CS412 Web application development
        Assignment: 1
        Due Date: 28/10/2019 -->
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
      type="text/css"
      href="../assets/stylesheets/progress-three.css"
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
    <script src="../assets/javascript/application.js"></script>
    <title>Resume</title>
  </head>

  <body div data-spy="scroll" data-target="#navbar" data-offset="0">
    <nav id="navbar" class="navbar fixed-top navbar-expand-xl navbar-dark">
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div id="navbarSupportedContent" class="collapse navbar-collapse mr-auto">
        <div class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="#contact-information">Contact</a>
          </li>

          <li class="nav-item ">
            <a class="nav-link" href="#basic-information">Basic Information</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#education-section">Education</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#technologies-section">Technologies</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#skills-section">Skills</a>
          </li>

          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              data-toggle="dropdown"
              href="#"
              role="button"
              aria-haspopup="true"
              aria-expanded="false"
              >Progresses</a
            >
            <div class="dropdown-menu">
              <a class="dropdown-item" href="progress-one.html">Progress 1</a>
              <a class="dropdown-item" href="progress-two.html">Progress 2</a>
            </div>
          </li>
        </div>

        <div class="navbar-nav">
          <li class="nav-item">
            <?php  if (isset($_SESSION['username'])) : ?>
            <a class="nav-link" href="index.php?logout='1'">Logout</a>
            <?php endif ?>
          </li>
        </div>
      </div>
    </nav>

    <section id="calculator">
      <div class="container mt-5 pt-5">
        <div class="row">
          <div class="col-4 offset-4 text-center">
            <h2>Calculator</h2>
            <div class="calculator">
              <div class="val">
                <textarea id="screen" class="form-control" value=""></textarea>
              </div>
              <div>
                <input class="btn m-1" type="button" value="1" id="1" />
                <input class="btn m-1" type="button" value="2" id="2" />
                <input class="btn m-1" type="button" value="3" id="3" />
                <input class="btn m-1" type="button" value="+" id="plus" />
                <input class="btn m-1" type="button" value="C" id="clear" />
              </div>
              <div>
                <input class="btn m-1" type="button" value="4" id="1" />
                <input class="btn m-1" type="button" value="5" id="2" />
                <input class="btn m-1" type="button" value="6" id="3" />
                <input class="btn m-1" type="button" value="-" id="minus" />
              </div>
              <div>
                <input class="btn m-1" type="button" value="7" id="1" />
                <input class="btn m-1" type="button" value="8" id="2" />
                <input class="btn m-1" type="button" value="9" id="3" />
                <input class="btn m-1" type="button" value="x" id="times" />
              </div>
              <div>
                <input class="btn m-1" type="button" value="." id="dot" />
                <input class="btn m-1" type="button" value="0" id="0" />
                <input class="btn m-1" type="button" value="=" id="result" />
                <input class="btn m-1" type="button" value="/" id="slash" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
