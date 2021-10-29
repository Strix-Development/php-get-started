<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Himachal Tourism </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <header>
        <div class="m-4">
            <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
                <div class="container-fluid">
                    <a href="index.php" class="navbar-brand">HIMACHAL TOURISM</a>
                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div id="navbarCollapse" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li class="nav-item">
                                <a href="#" class="nav-link">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Profile</a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav ms-auto">
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">User ID</a>
                                <div class="dropdown-menu dropdown-menu-end bg-dark">
                                    <?php 
                                    if(isset($_SESSION['ename'])){

                                        echo '<a href="logout.php" name="logout" id="logout" class="dropdown-item" style="color: white;">Log out</a>';
                                    }else{

                                        echo '<a href="get-started/login.php" class="dropdown-item" style="color: white;">Log in</a>';
                                    }

                                   if(isset($_SESSION['ename'])){

                                   echo '<a href="profile.php" name="profile" id="profile" class="dropdown-item" style="color: white;">Profile</a>'; 
                                }
                                     ?>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
