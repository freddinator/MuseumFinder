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

require_once 'header.php';
?>

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

session_destroy();

?>

			<br>
			<div class="text-center">
				<div class="btn-group text-center" role="group" aria-label="...">
					<a href="/choice.php" class="btn btn-default"><i class="fa fa-repeat"></i> Restart</a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
