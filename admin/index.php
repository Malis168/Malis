<?php
  	session_start();
  	if(isset($_SESSION['admin'])){
    	header('location:home.php');
  	}
?>


<?php include 'includes/header.php'; ?>
<body class="hold-transition login-page">
<div class="login-box">

  
  	<div class="login-box-body">
	  <div class="login-logo" style="color: #3c8dbc">
  		<b>Library Management</b>
  	</div>
    	<p class="login-box-msg" style="color: #3c8dbc"><b>Login Form</b></p>

    	<form action="login.php" method="POST">
      		<div class="form-group has-feedback">
        		<input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
      		</div><br>
			<div class="form-group has-feedback">
				<input type="password" class="form-control" name="password" placeholder="Password" required>
			</div><br>
      		<div class="form-group has-feedback">
    			<div class="">
          			<button type="submit" class="btn btn-primary btn-block" name="login"><i class="fa fa-sign-in"></i> Login</button>
        		</div>
      		</div>
    	</form>
  	</div>
  	<?php
  		if(isset($_SESSION['error'])){
  			echo "
  				<div class='callout callout-danger text-center mt20'>
			  		<p>".$_SESSION['error']."</p> 
			  	</div>
  			";
  			unset($_SESSION['error']);
  		}
  	?>
</div>
	
<?php include 'includes/scripts.php' ?>
</body>
</html>