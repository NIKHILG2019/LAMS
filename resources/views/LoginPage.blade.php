<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login Form</title>
  <link rel="stylesheet" href="/css/LoginPage.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body class="body">
  <div>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <a href="/index.html" class="navbar-brand">LAMS</a>
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div id="navbarCollapse" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="navbar-text text-light">Leave and Attendance Management System</li>
        </ul>
      </div>
    </nav>
  </div>
  <div class="form-container bg-dark text-light">
    <form action="index.html" class="regform" methord="POST" onsubmit="return formValidation()">
      <div class="form-row">
        <div class="form-group col-md-12">
          <label for="loginPage">
            <h4>Login</h4>
          </label>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-12">
          <label for="username">Username<span class="text-danger">*</span></label>
          <br>
          <input name="username" type="email" class="form-control" placeholder="year.first_name.last_name@ves.ac.in" required>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-12">
          <label for="password">Password<span class="text-danger">*</span></label>
          <br>
          <input name="passwrd" type="password" class="form-control" placeholder="******" required>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-3 ">
          <label class="form-check-label" for="Student">Student</label>
          <input checked class="form-check-input-inline" type="radio" name="facultyorstudent" value="student" required>
        </div>
        <div class="form-group col-md-3">
          <label class="form-check-label" for="Faculty">Faculty</label>
          <input class="form-check-input-inline" type="radio" name="facultyorstudent" value="faculty" required>
        </div>
      </div>
      <div class="form-row">
        <button type="submit" class="btn btn-lg btn-block btn-outline-light">Submit</button>
      </div>
      <br>
      <h4>OR</h4>
      <br>
      <form action="registeration.html">
        <div class="form-row">
          <button type="button" class=" reg btn btn-lg btn-block btn-outline-light">Register</button>
        </div>
      </form>
    </form>
  </div>
</body>
<script>
  $(".reg").click(function() {
    window.open("registeration.html", "_self");
  });
</script>
</html>
