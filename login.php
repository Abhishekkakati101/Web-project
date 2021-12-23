<html>
    <head>
        <title> User Login and Registration</title>
        <link rel = "stylesheet" type = "text/css" href = "styles.css">
        <link rel = "stylesheet" type = "text/css" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
        <div class = "container">
            <div class = "login-box">
            <div class = "row">
            <div class = "col-md-6 login-left">
                <h2>SignIn</h2>
                <form action="validation.php" method = "post">
                    <div class = "form-group">
                        <label> Username </label>
                        <input type="text" name = "user" class = "form-control" required>
                        </div>

                    <div class = "form-group">
                        <label> Password </label>
                        <input type="password" name = "password" class = "form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary"> SignIn </button>
                </form>
            </div>

            <div class = "col-md-6 login-right">
                <h2>SignUp</h2>
                <form action="registration.php" method = "post">
                    <div class = "form-group">
                        <label> Username </label>
                        <input type="text" name = "user" class = "form-control" required>
                        </div>

                    <div class = "form-group">
                        <label> Password </label>
                        <input type="password" name = "password" class = "form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary"> SignUp </button>
                </form>
            </div>
            </div>
            </div>
        </div>                      
    </body>
</html>