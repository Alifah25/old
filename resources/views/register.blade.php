<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Buku | Register</title>
</head>

<style>
    .main{
        height: 100vh;
    }

    .register-box {
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
        <div class="register-box">
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
                    <a href="login">Login</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>