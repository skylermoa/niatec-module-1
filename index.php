<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form action="login.php" method="post">
		<h2>LOGIN</h2>
		<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
		<label>Username</label>
     	<input type="text" name="username" placeholder="Username"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password" maxlength="10"><br>

     	<button type="submit">Login</button>
     	<button type="button" onclick="openHintModal()">Hint</button>
     		<!-- The Modal -->
		<div id="hintModal" class="modal">

			<!-- For Dev: 4f26aeafdb2367620a393c973eddbe8f8b846ebd -->
			<div class="modal-content">
				<span class="close" onclick="closeHintModal()">&times;</span>
				<p>To get the pot of gold you have to follow the rainbow.</p>
				<p>But beware the leprechaun. That magical trickster sure is a SHAdy 1.</p>
			</div>

		</div>
	</form>
	<script type="text/javascript" src="script.js"></script>
</body>
</html>