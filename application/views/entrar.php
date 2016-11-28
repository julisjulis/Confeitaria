<!DOCTYPE html>
<html>
    
    
<head>
	<title>Confeitaria</title>
	<link rel="stylesheet" href=<?php echo base_url();?>static/css/entrar.css>
</head>



<body>

<form method="post">
  
  <div class="container">
    <label><b>Login</b></label><br>
    <input type="text" placeholder="Enter Username" name="uname" required><br>

    <label><b>Senha</b></label><br>
    <input type="password" placeholder="Enter Password" name="psw" required><br>

    <button type="submit">Entrar</button>
    <input type="checkbox" checked="checked"> Remember me
  </div>

  
</form>


</body>
</html>
