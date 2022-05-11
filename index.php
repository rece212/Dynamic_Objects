<html>
	<head>
		<title>Dynamic Objects</title>
	</head>
	<body>
		<form action="index.php" method="post">
		<?php
        $carsNames = array("v40", "x3", "Corolla");
		create_buttons();
		function create_buttons()
		{
            $cars = array("Volvo", "BMW", "Toyota");
			for ($i = 1; $i <= 3 ; $i++)
			{
                echo 'Car brand '.$cars[$i-1].'   ';
				echo '<input type="submit" name="button['.$i.']"
				value="Add to cart" style=width:250px;height:25px/></br>';
			
			}
		}
		//The if statement runs if the web page has been refreshed
		if($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			$x = key($_POST['button']);
            $Output= $carsNames[$x-1];
			echo "<script>alert('You clicked on button $x $Output');</script>";
		}
		?>
   </form>
  </body>
</html>