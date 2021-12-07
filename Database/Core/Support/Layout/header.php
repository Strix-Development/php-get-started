<!DOCTYPE html>
<html>
<head>
  <title>Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    .dropdown-menu {
	min-width: 8rem;
}
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container">
      <!-- logo -->
      <a class="navbar-brand" href="index.php">Logo</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- dropdown -->
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <?php
          // if user logged in then only logout button in dropdown
        
          if (isset($_SESSION['email'])) {
            $conn = mysqli_connect('localhost', 'root','','database');
            $sql1 = "SELECT * FROM form where Email = '" . $_SESSION['email'] . "'";  
            $query = mysqli_query($conn, $sql1);
            $fetch = mysqli_fetch_assoc($query);
            echo '<a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown">'
              . $fetch['First Name'] . '</a>
           <ul class="dropdown-menu">
           <li><a class="dropdown-item" href="profile.php">Profile</a></li>
             <li><a class="dropdown-item" href="Core/Support/Action/logout.php">Log out</a></li>
           </ul>';
          } else {
            // if user not logged in then sign in and sign up buttons in dropdown
            echo '<a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown">Log in</a>
           <ul class="dropdown-menu">
             <li><a class="dropdown-item" href="login.php">Sign in</a></li>
             <li><a class="dropdown-item" href="register.php">Sign up</a></li>
           </ul>';
          }
          ?>
        </li>
      </ul>
    </div>
  </nav>