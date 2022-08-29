<!DOCTYPE HTML>
<html>
<head>
	<?php include("include/include.php"); ?>
    
	<title>Liri Carroserie</title>
     
</head>
<body>
	<div class="content">
		<?php include("include/header.php"); ?>
		<?php echo $_SESSION['email'];?>
		<!-- Info -->
		<div class="bloc">
			<div class="info">
				
					<?php if($_SESSION['log']){?>
						dfdsfsdfdf
					<?php }else{ ?>
						<div class="col-md-4 boxPadding">
							<div class="box">
								<h1><span class="fa fa-sign-in"></span>Login</h1><br/>
								<!-- LOGIN FORM -->
								<form action="include/login.php" method="post">
									<div class="form-group">
										<label>Email</label>
										<input type="text" class="form-control" name="email" required>
									</div>
									<div class="form-group">
										<label>Mot de passe</label>
										<input type="password" class="form-control" name="password" required>
									</div>
									<button type="submit" class="btn btn-primary btn-lg">Login</button>
								</form>
							</div>
						</div>
						<div class="col-md-8 boxPadding">
							<div class="box">
								<h1><span class="fa fa-user"></span>Créer un compte</h1><br/>
								<!-- LOGIN FORM -->
								<form action="include/account.php" method="post">
									<div class="form-group">
										<label>Prénom</label>
										<input type="text" class="form-control" name="firstname" required>
									</div>
									<div class="form-group">
										<label>Nom</label>
										<input type="text" class="form-control" name="lastname" required>
									</div>
									<div class="form-group">
										<label>Email</label>
										<input type="text" class="form-control" name="email" required>
									</div>
									<div class="form-group">
										<label>Mot de passe</label>
										<input type="password" class="form-control" name="password" required>
									</div>
									<button type="submit" class="btn btn-primary btn-lg">Enregistrer</button>
								</form>
							</div>
						</div>
					<? } ?>
			</div>
		</div>

		<?php include("include/pub.php"); ?>
	</div>
</body>
</html>