<?php
$backgrounds = array();
$backgrounds[] = "https://checkyourparis.files.wordpress.com/2010/03/img_0970.jpg";
$backgrounds[] = "http://dowlaismalechoir.co.uk/wp-content/uploads/2012/06/Science-museum-London.jpg";
$backgrounds[] = "http://www.decadesofelegance.com/wp-content/uploads/2014/05/Wedding_Dresses_1775-2014_1.jpg";
$backgrounds[] = "http://upload.wikimedia.org/wikipedia/commons/4/4b/Elgin_Marbles_British_Museum.jpg";

shuffle($backgrounds);

$backgroundUrl = $backgrounds[0];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Museum Match</title>

    <!-- Bootstrap core CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->
</head>

<body>

<div class="site-wrapper">

    <div class="site-wrapper-inner">

        <div class="cover-container">

            <div class="masthead clearfix">
                <div class="inner">
                    <h3 class="masthead-brand"><i class="fa fa-university"></i> Museum Match</h3>
                </div>
            </div>

            <div class="inner cover">
                <h1 class="cover-heading"><i class="fa fa-university"></i> Museum Match</h1>
                <p class="lead">Find the perfect museum in London, just answer a few simple questions</p>
                <p class="lead">
                    <a href="#" class="btn btn-lg btn-default">Try it Out</a>
                </p>
            </div>

            <div class="mastfoot">
                <div class="inner">
                    <p>Created for YRS Upload Live <a href="https://github.com/freddinator/MuseumFinder"<i class="fa fa-github"></i></a> | LGPL Licensed</p>
                </div>
            </div>

        </div>

    </div>

</div>

<style>
    body {
        background: url(<?php echo $backgroundUrl;?>) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }

</style>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</body>
</html>
