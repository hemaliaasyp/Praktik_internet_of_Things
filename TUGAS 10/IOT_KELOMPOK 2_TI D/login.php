<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-5 text-center mt-3 mx-auto p-4">
                <h1 class="h2">Login Small IOT</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-5 mx-auto mt-3">
                <div class="card" style="width: 30rem;">
                    <div class="card-body bg-success">
                        <form action="prosesLogin.php" method="POST">
                            <div class="form-group">
                                <label for="InputUserID">User ID</label>
                                <input type="text" class="form-control" name="inputUserID" placeholder="Enter UserID">
                            </div>
                            <div class="form-group">
                                <label for="InputPassword">Password</label>
                                <input type="password" class="form-control" name="inputPassword" placeholder="Enter Password">
                            </div>
                            <button type="submit" class="btn btn-dark">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>