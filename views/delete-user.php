<?php
session_start(); 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!--Bootstrap link-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!--Font awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
    <title>Delete User</title>
</head>
<body>
    <nav class="navbar-expand navbar-dark bg-dark" style="margin-bottom: 80px">
            <div class="container">
                <a href="dashboard.php" class="navbar-brand">
                    <h1 class="h3">The Company</h1> <!--Adding bootstrap design-->
                </a>
                <div class="navbar-nav">
                    <span class="navbar-text"><?=$_SESSION['full_name']?></span>
                    <form action="../actions/logout-action.php" method="post" class="d-flex ms-2">
                        <button type="submit" class="text-danger bg-transparent border-0">Logout</button>
                    </form>

                </div>
            </div>

     </nav>

    <main class="row justify-content-center gx-0">
        <div class="col-4 text-center"> 
        <i class="fa-solid fa-triangle-exclamation text-warning display-4 d-block mb-2"></i>
        <h2 class="text-danger mg-2">Delete Account</h2>

        <p class="fw-bold">Are you sure you want to delete this account?</p>
        </div>
        <div class="row">
            <div class="col">
                <a href="dashboard.php" class="btn btn-secondary w-100">Cancel</a>
            </div>
            <div class="col">
            <form action="../actions/Delete-user-action.php" method="post">
                <button type="submit" class="btn btn-outline-danger w-100">Delete</button>
            </form>
            </div>
        </div>

    </main>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>