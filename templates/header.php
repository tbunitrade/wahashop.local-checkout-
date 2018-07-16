<!DOCTYPE html>
<html lang="en" <?php  #echo get_language_attributes(); ?> >

<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow" />

    <!-- <link href="app/dist/img/favicon.png" rel="shortcut icon"  > -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./app/dist/css/vendor.css">
    <link rel="stylesheet" type="text/css" href="./app/dist/css/style.css">
    <script type="text/javascript" src="./app/dist/js/vendor.js"></script>
    <script type="text/javascript" src="./app/dist/js/dist.js"></script>

	<title><?php echo ' My Title ';?></title>


</head>

<body id="body">
    <div class="container-fluid">

            <header id="header" >
                <div class="col-xs-12 col-md-3 col-lg-4 ">
                    <div class="logo"></div>
                </div>

                <div class="col-xs-12 col-md-8 col-lg-6">
                    <?php include ('nav/nav.php') ; ?>
                </div>

                <div class="col-xs-12 col-md-1 col-lg-2">
                    <?php include ('page/search.php') ; ?>
                </div>
            </header>

