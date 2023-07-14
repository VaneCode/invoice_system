<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <div class="row">
    <div class="demo-heagind pull">
        <h2>Invoice system</h2>
    </div>
    <div class="login-form">
        <h4>Login</h4>
        <form action="" method="post">
            <?php if ($loginError ) { ?>
                <div class="alert alert-warning"><?php echo $loginError; ?></div>
            <?php } ?>
            <div class="form-group">
            <input name="email" id="email" type="email" class="form-control" placeholder="Email address" 
            autofocus="" required>
            </div>
            <div class="form-group">
            <input type="password" class="form-control" name="pwd" placeholder="Password" 
            required>
            </div>
            <div class="form-group">
            <button type="submit" name="login" class="btn btn-info">Login</button>
            </div>
        </form>
    </div>

   </div> 
</body>
</html>