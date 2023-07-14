<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Invoice system</title>
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
   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>