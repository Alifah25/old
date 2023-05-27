<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Buku | Login </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-gH2yI3qKdNHPEq0n4Mqa/ HGKIhSKIHEL5AyhkYV815905AR6csBvApHHN1/v11Bx" 
    cross origin="anonymous">
</head>

<style>
    .main {
        height: 100vh;
        box-sizzing: border-box;
    }
    .login-box {
        width: 200px;
        border: solid 1px;
        padding: 10px;
    }
    form div{
        margin-bottom: 15px;
    }

</style>
<body>
    <div class="main d-flex flex-column justify-content-center align-items-center">
        @if (session('status'))
        <div class="alert alert-danger">
            {{ session('message') }}
        </div>
        @endif
        <div class="login-box">
            <form action="" method="post">
                @csrf
                <div>
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" id="username" class="form-control" required>
                </div>
                <div>
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary"> Login </button>
                </div>
                <div>
                    <a href="register">Sign Up</a>
                </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dw1ZdYEk039Gagi7vIsF@jrRAoQmDKKtQBHUULZ9As5v4jD 4Xa" crossorigin="anonymous"></script>
</body>
</html>