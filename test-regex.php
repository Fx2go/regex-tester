<?php
/*url=
http://127.0.0.1/TP-PHP/regex/test-regex.php
*/
if(isset($_POST['maRegex'])&&isset($_POST['chaineTest'])){
$chaineTest=$_POST['chaineTest'];
$maRegex=$_POST['maRegex'];
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr" >
     <head>
          <title>Regex test</title>
          <meta http-equiv="Content-Type" content="text/html; charset=utf8" />
          <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet"> 
			<style type="text/css">
				body{
					background-color: black;
					color: white;
					}
				html,input {
					font-family: 'Quicksand', sans-serif;
					}
				input{
					margin : 0 0 1em 0;
					}

				input[type=text]{
					width:100%;
					font-size: 1.5em;
				}
				input[type=submit]{
					font-weight:900;

				}

				.vrai, .faux {
					padding :0 2em;
					font-size: 150%;
				}
				.vrai{
					background-color: green;
				}
				.faux{
					background-color: red;
					color:black;
				}
      		</style>
     </head>
     <body>
	<?php


?>
<form method="post" action="test-regex.php">
			<p>	

				Chaîne à tester :</br>
				<input style="width:100%;" type="text" name="chaineTest" value="<?php if(isset($_POST['chaineTest'])){echo $_POST['chaineTest'];} ?>" width="500px"></input><br/>

				Regex, expression régulière :</br>
				<input type="text" name="maRegex" value="<?php if(isset($_POST['maRegex'])){echo $_POST['maRegex'];} ?>"></input><br/></br>

<!--Boutton "Envoyer"-->
				<input type="submit" value="👉 Tester">
			</p>
		</form>

<hr/>

<?php

if(isset($_POST['maRegex'])&&isset($_POST['chaineTest'])){
 	

 	echo'résultat =</br> ';



 	if (preg_match($_POST['maRegex'], $_POST['chaineTest']))
	{
	    echo '<span class="vrai">VRAI</span>';
	}
	else
	{
	    echo '<span class="faux">FAUX</span>';
	}

}

	?>
     </body>
</html>
