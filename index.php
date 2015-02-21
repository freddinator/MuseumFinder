<?php
session_start();

if(isset($_GET['clear'])){
  session_destroy();
  header('Location: /');
  die();
}

if(!isset($_GET['id'])){
  header('Location: index.php?id=' . 0);
}

require_once 'apiUtils.php';

if (!isset($_SESSION['data'])){
  $data = getRandom();

  shuffle($data);


  shuffle($data);

  $_SESSION['natural'] = 0;
  $_SESSION['va'] = 0;
  $_SESSION['science'] = 0;
  $_SESSION['british'] = 0;

  $_SESSION['data'] = $data;
}else{
  $data = $_SESSION['data'];
}

$total = count($data);


$i = $_GET['id'];



if ($i < $total){
  $item = $data[$i];
}else{
  header('Location: verdict.php');
  die();
}

$current = $i+1;

$percent = $current/$total;

$percent = $percent * 100;


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
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <div class="alert alert-info" role="alert">This app currently uses hard coded data!</div><br>
		<div class="progress">
  			<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $percent;?>%;">
          <?php echo $i+1 . '/' . $total;?>
  			</div>
		</div>
  </div>
  <div class="col-md-2"></div>
</div>
		<div id="buffer">
			<h2><?php echo $item["name"]; ?></h2> <!-- name of artifact -->
			<div class="text-center" id="img"><img src="<?php echo $item['image']; ?>" height="300"></div><!-- picture of artifact -->
			<br>
			<div class="text-center">
				<div class="btn-group text-center" role="group" aria-label="...">
          <a href='choice.php?id=<?php echo $i;?>&choice=n' class="btn btn-danger">Nope</a>
            <a href='choice.php?id=<?php echo $i;?>&choice=y' class="btn btn-success">Yes</a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
