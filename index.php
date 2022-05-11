<html>
	<head>
		<title>Dynamic Objects</title>
	</head>
	<body>
		<form action="index.php" method="post">
		<?php
		
		create_buttons();
		function create_buttons()
		{
			for ($i = 1; $i <= 50 ; $i++)
			{
				echo '<input type="submit" name="button['.$i.']"
				value="BUTTON '.$i.' " style=width:250px;height:25px/>';
			
			}
		}
		//The if statement runs if the web page has been refreshed
		if($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			$x = key($_POST['button']);
			echo "<script>alert('You clicked on button $x');</script>";
		}
		?>
   </form>
  </body>
</html>