<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<style type="text/css">
		*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: sans-serif;
}
 
body{
    background: #c0c0c0;
}
 
div.konten{
    background: #ffffff;
    width: 350px;
    margin: 222px auto 0;
    border-radius: 16px;
    min-height: 256px;
    overflow: hidden;
}
 
div.kepala{
    background: #f85252;
    padding: 10px 22px;
    height: 60px;
}
 
div.kepala h2.judul{
    color: #fff;
    font-weight: normal;
    line-height: 40px;
    display: inline-block;
}
 
div.lock{
    background-image: url("lock.png");
    background-position: center;
    background-size: 38px;
    display: inline-block;
    width: 25px;
    height: 25px;
    margin-top: 8px;
    float: left;
    margin-right: 10px;
}
 
div.artikel{
    padding:10px 22px 0;
    color: #808080;
}
 
div.artikel div.grup{
    margin: 16px 0;
}
</style>
</head>
<body>
	<?php echo isset($error) ? $error : ''; ?>  
	<form method="post" action="<?php echo site_url('Login/process');?>">
		<div class="konten">
			<div class="kepala">
				<div class="lock"></div>
				<h2 class="judul">Sign In</h2>
			</div>
			 <div class="artikel">
            <form action="#" method="post">
                <div class="grup">
                    <label for="user">Username</label>
                    <input type="text" placeholder="Masukkan Alamat Email Anda">
                </div>
                <div class="grup">
                    <label for="password">Password</label>
                    <input type="password" placeholder="Masukkan password Anda">
                </div>
                <div class="grup">
                    <input type="submit" value="Sign In">
                </div>
            </form>
		</div>
		</div>
</body>
</html>