<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset = "utf-8" />
		<title>Quizzer</title>
		<link rel = "stylesheet" href = "css/style.css" type = "text/css" />
	</head>
	
	<body>
		<header>
			<div class = "container">
			<h1>Quizzer</h1>
			</div>
		</header>
		
		<main>
			<div class = "container">
				<h2>You're done!</h2>
					<p>Congrats! You have completed the test</p>
					<p>Final Score: <?php echo $_SESSION['score']; ?></p>
					<a href = "question.php?n=1" class = "start">Take Again</a></br>
					<a href = "add.php" class = "start">Add a question</a>
			</div>
		</main>
		
		<footer>
			<div class = "container">
				Copyright &copy; 2015, Andrea's Quizzer
			</div>
		</footer>
	</body>
</html>