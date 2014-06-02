<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo HTTP_CSS_PATH; ?>favicon.png">
    <title>Sisfo Gempa Ver 1.0</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo HTTP_CSS_PATH; ?>bootstrap.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="<?php echo HTTP_JS_PATH; ?>html5shiv.js"></script>
      <script src="<?php echo HTTP_JS_PATH; ?>respond.min.js"></script>
    <![endif]-->
	
  </head>
<body>
    <?php
    $pg = isset($page) && $page != '' ?  $page :'home'  ;    
    ?>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url(); ?>">Sisfo Gempa</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li <?php echo  $pg =='home' ? 'class="active"' : '' ?>><a href="<?php echo base_url(); ?>">Home</a></li>
            <li <?php echo  $pg =='about' ? 'class="active"' : '' ?>><a href="<?php echo base_url(); ?>aboutus">Pengendalian Dini</a></li>
            <li <?php echo  $pg =='datagempa' ? 'class="active"' : '' ?>><a href="<?php echo base_url(); ?>datagempa">Data Gempa Terakhir</a></li>
            <li <?php echo  $pg =='gempa' ? 'class="active"' : '' ?>><a href="<?php echo base_url(); ?>gempa">Gempa</a></li>
			<li <?php echo  $pg =='register' ? 'class="active"' : '' ?>><a href="<?php echo base_url(); ?>register">SignUp</a></li>
			
          </ul>
          <form class="navbar-form navbar-right" >
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
