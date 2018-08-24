<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
    <link rel='stylesheet' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>
    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
<?php echo isset($error)? $error : ''; ?>
<form method ="post" action ="<?php echo site_url('Login/process');?>" class="form-control">
<div class="wrapper">
    <form class="form-signin">       
      <h2 class="form-signin-heading">Please login</h2>
      <input type="text" class="form-control" name="user" placeholder="Username" required="" autofocus="" />
      <input type="password" class="form-control" name="pass" placeholder="Password" required=""/>      
      <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>   
    </form>
  </div>
</form>
</body>
</html>