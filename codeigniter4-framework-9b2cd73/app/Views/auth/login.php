<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <link href="<?= base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
</head>
<body>

<div class="container">
    <div class="row" style="margin-top:45px">
        <div class= "col-md-4 col-md-offset-4">
            <h4>Log in</h4> <hr>
            <form action="">
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="text" class="form-control" name="password" placeholder="Enter your password">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit"> Log In</button>
                </div>
                <br>
                <a href="<?= site_url('auth/register'); ?>">Dont have an account? Register</a>
            </form>
        </div> 
</div>
</div>
</body>
</html>