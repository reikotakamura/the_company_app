
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--Bootstrap link--> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
    
    <title>Register Page</title>
</head>
<body class="bg-light">

<div style="hight: 100vh;">
    <div class="row h-100 m-0">
    <div class="card w-25 my-auto mx-auto">
        <div class="card-header bg-white border-0 py-3">
            <h1 class="text-center">Register</h1>
        </div>
        <div class="card-body">
            <form action="../actions/Register-action.php" method="post" autocomplete="off">
            <div class="mb-3">
                <label for="first-name" class="form-label">First Name</label>
                <input type="text" name="first_name" id="first_name" class="form-control" required autofocus>
            </div>
            <div class="mb-3">
                <label for="last-name" class="form-label">Last Name</label>
                <input type="text" name="last_name" id="last_name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" id="first_name" class="form-control fw-bold" maxlength="15">
            </div>           
             <div class="mb-5">
                <label for="password" class="form-label fw-bold">Password</label>
                <input type="password" name="password" id= "password" class="form-control" minlength="8"
                aria-describedby= "password-info" required>
                <div class="form-text" id="password-info">
                    Password should be at least 8 characters length.
                </div>
            </div>

            <button type="submit" class="submit btn btn-success w-100"> Register </button>

            </form>

            <p class="text-center small mt-3"> Registered already? <a href="../views">Login</a></p>


        </div>

    </div>


    </div>


</div>
    




      
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>