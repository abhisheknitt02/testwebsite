<!DOCTYPE html>
<html>
<head>
	<title>question</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		h3
		{
			font-family: sans-serif;

		}
		form
		{
			background: #f6e58d;
			padding: 20px;
		}
		button
		{
			padding: 10px 30px;
		}
	</style>
</head>
<body>
<div class="row">
	<div class="col-7">
		<div class="header">
			<span>Add question</span>
		</div>
<form action="abhoutr.php" method="post">
	<h3 >QUESTION</h3 >
	<input type="text" name="ques" placeholder="question" autofocus><br><br>
	<h3 >CHOICES</h3 >
	<input type="text" name="op1" placeholder="option">
	<input type="text" name="op2" placeholder="option">
	<input type="text" name="op3" placeholder="option">
	<input type="text" name="op4" placeholder="option"><br><br>
	<h3>ANSWER</h3>
	<input type="number" name="ans">
	<h3 >QUESTION NUMBER</h3 >
	<input type="number" name="quesno" placeholder="question number"><br><br>
	<button type="submit">ADD</button>
</form>
</div>
	<div class="col-5">
			<div class="header">
				Status
			</div>
	</div>
</div>
</body>
</html>