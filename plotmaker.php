<?php
	#Get args and generate plots
	$user = htmlspecialchars($_GET["user"]);
	$month = htmlspecialchars($_GET["month"]);
	exec('"C:\Program Files\R\R-3.2.3\bin\Rscript.exe" "make.R" ' . $user . ' ' . $month); //Runs command "Rscript username month"
	header("Location: plots.php?user=$user&month=$month"); //Redirect browser
	exit();
?>