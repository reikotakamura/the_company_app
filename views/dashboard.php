<?php
    session_start(); //initialize the session variables 
    
    require '../classes/User.php'; 
    $user = new User; 
    $all_users = $user->getAllUsers();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <!--Bootstrap link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Dashboard</title>
    <!--Font awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body>
    <nav class="navbar-expand navbar-dark bg-dark" style="margin-bottom: 80px">

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
        <div class="col-6">
            <h2 class="text-center lead">User list</h2>
            <table class="table table-hover align-middle">
                <thead>
                    <th><!--Photo--></th>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                    <th style="rowspan=:'2'">Action Buttons</th>

                </thead>
                <tbody> 
                    <?php
                    while($user = $all_users->fetch_assoc()){
                        ?>
                    
                        <tr>
                            <td>
                                <?php
                                    if($user['photo']){
                                ?>
                                    <img src="../assets/images/<?=$user['photo']?>" alt="<?=$user['photo']?>" class="d-block mx-auto" style="width: 3em; height: 3em; object-fit: cover;">
                                <?php
                                }else{
                                ?>
                                    <i class="fa-solid fa-user text-secondary d-block text-center dashboard-icon"></i>

                                <?php
                                }
                                ?>
                            </td>
                            <td><?=$user['id']?></td>
                            <td><?=$user['first_name']?></td>
                            <td><?=$user['last_name']?></td>
                            <td><?=$user['username']?></td>
                            <!--actual buttons-->
                            <td>
                                <?php
                                    if($_SESSION['id'] == $user['id']){
                                ?>
                                    <a href="../views/edit-user.php" class="btn btn-outline-warning" title="Edit">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                    <a href="../views/Delete-user.php" class="btn btn-outline-danger" title="Delete">
                                    <i class="fa-regular fa-trash-can"></i></a>
                                <?php

                                    }
                                ?>
                            </td>
                            <!-- <td></td> -->

                        </tr>


                    <?php
                    }
                    ?>
                </tbody>

            </table>
            </div>



    </main>


    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>