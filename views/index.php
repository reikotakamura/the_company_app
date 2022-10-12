<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body class="bg-light">
    <div style="height: 100vh;">
        <div class="row h-100 m-0">
            <div class="card my-auto mx-auto w-25">
            <div class="card-header bg-white border-0 py-3">
            <h1 class="text-center">Login</h1>
             </div>
             <div class="card-body">
                <form action="../actions/User-action.php" method="post" autocomplete="off">
                    <label for="username" class="form-label mt-2">Username</label->
                    <input type="text" name="username" id="" class="form-control mg-2" placeholder="username" required autofocus>
                    <label for ="password" class="form-label mt-2">Password</label>
                    <input type="password" name="password" id="" class="form-control mb-2" placeholder="password" required>
                    <button type="submit"  class="form-control btn btn-primary w-100">Login </button>
                </form>
                <p class="text-center small mt-2">Create Account<a href="../views/Register.php">Register</a></p>
             </div>
       
          
            </div>
            <div> <p>This is a test.</p>
            </div>

        </div>

    </div>
    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>