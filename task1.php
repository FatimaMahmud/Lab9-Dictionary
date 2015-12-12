<h1 style="text-align: center;">Digital Dictionary</h1>
<h3 style="text-align: center;">Search a Word</h3>
<div style="text-align: center; ">
<form action="<?php $PHP_SELF ?>" method="post">
<input type= "text" value="" name="text" style="text-align: center; "><br><br>
<input type= "submit" value="Search" name="submit" style="text-align: center; ">
</form>

</div>
	<?php 
		
		$lines = file('dictionary.txt', FILE_IGNORE_NEW_LINES);
		$intro = file_get_contents('Intro.txt');
		$homepage = file_get_contents('dictionary.txt');
		
		echo "<br><br><br>";
		echo $intro;
		//echo $homepage;
	?>
	
	<?php
		if(isset ($_POST["submit"])){
		$searchWord = $_POST["text"];
		$searchWord = trim($searchWord);
		if($searchWord){
			 echo "<script>alert('Your searched Word is $searchWord');</script>";
		if(strcmp($searchWord, $homepage)){
			//print("<h1>" . $_POST["text"] . " is in the Dictionary and the meaning is below the file</h1>");
			$index = file_get_contents('dictionary.txt', NULL, NULL, strpos($homepage , $searchWord), 50);
			echo "<br><br><br>";
			print $index;
			
			//echo "<script>alert('And it`s meaning is $index');</script>";
		}
		else
			echo "<script>alert('no such word exists');</script>";
		}
		}
			//print "<br>Your searched Word is $searchWord <br>";
		
		/*else
			{
				?>
				<form action="<?php $PHP_SELF ?>" method="post">
					<input type= "text" value="Enter a word" name="text" style="text-align: center; "><br><br>
					<input type= "submit" value="Search" name="submit" style="text-align: center; ">
				</form>
			<?php
			}*/
			?>