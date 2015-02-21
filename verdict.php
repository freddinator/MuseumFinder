<?php
session_start();

$natural = $_SESSION['natural'];
$science = $_SESSION['science'];
$british = $_SESSION['british'];
$va =  $_SESSION['va'];


if ($natural == $science && $british == $va && $science == $british){
  $nopreference = true;
}else{

  $nopreference = false;


  $scores = array();

  $scores['natural'] = $natural;
  $scores['science'] = $science;
  $scores['british'] = $british;
  $scores['va'] = $va;

  $previousKey = 0;
  foreach (array_keys($scores, max($scores)) as $key){
    $museums[] = $key;
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Museum Finder</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
	<div id="container">
		<header>
			<nav class="navbar navbar-default">
  				<div class="container-fluid">
    				<!-- Brand and toggle get grouped for better mobile display -->
    				<div class="navbar-header">
      					<a class="navbar-brand" href="#">Museum Finder</a>
    				</div>
  				</div> <!-- /.container-fluid -->
			</nav>
		</header>
		<br>
		<div class="text-center">
<?php
if ($nopreference == false){
  if (count($museums) > 1){
    echo "<h2>We found serveral museums that fit you</h2> <br>";
  }else{
    echo "<h2>We found your perfect museum</h2><br>";
  }

  foreach ($museums as $museum){
    switch ($museum){
      case "science":
        echo "<h4>The Science Museum</h4><br>";
        break;
      case "natural":
        echo "<h4>The Natural History Museum</h4><br>";
        break;
      case "va":
        echo "<h4>The V & A Museum</h4><br>";
        break;
      case "british":
        echo "<h4>The British Museum</h4><br>";
        break;
    }

  }


}else{
  echo "<h2>You showed no clear preference</h2>";
}



?>

			<br>
			<div class="text-center">
				<div class="btn-group text-center" role="group" aria-label="...">
					<a href="/?clear" class="btn btn-default">Restart</a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
