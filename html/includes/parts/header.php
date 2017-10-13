<?php require 'includes/php/functions.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, max-scale=1" >
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>AlgaeCal</title>

    <!-- Bootstrap -->
    <link href="http://<?=$_SERVER['SERVER_NAME']?>/includes/css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300400,700" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- favicons -->
    <link rel="shortcut icon" href="https://cdn.algaecal.com/wp-content/themes/algaecal/favicon.ico">
    <link rel="apple-touch-icon" sizes="114x114" href="https://cdn.algaecal.com/wp-content/themes/algaecal/ico/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="https://cdn.algaecal.com/wp-content/themes/algaecal/ico/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" href="https://cdn.algaecal.com/wp-content/themes/algaecal/ico/apple-touch-icon.png">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar">
        <div class="container">
          <div class="row">
            <div class="navbar-header col-xs-12">
                <a href="#" class="pull-left nav-logo"><svg id="algaecal" viewBox="0 0 146 42" width="100%" height="100%">
                <path fill="#67676E" d="M8.8,21.8l2.7-7.8c0.8-2.3,1.2-4.3,1.2-4.3h0.2c0,0,0.4,1.9,1.2,4.3l2.6,7.8H8.8z M13,4.5
                c-1.7,0-3,0.3-3,0.3L0.7,32c0,0,0.8,0.3,2.3,0.3c1.5,0,2.4-0.3,2.4-0.3l2.1-6.2H18l2.1,6.2c0,0,0.7,0.3,2.4,0.3
                c1.8,0,2.7-0.3,2.7-0.3L16,4.9C16,4.9,14.9,4.5,13,4.5"></path>
                <path fill="#67676E" d="M28.4,3.7V32c0,0,0.7,0.3,2.4,0.3c1.6,0,2.4-0.3,2.4-0.3V3.7c0,0-0.8-0.3-2.4-0.3
                  C29.2,3.4,28.4,3.7,28.4,3.7"></path>
                <path fill="#67676E" d="M45.5,22.5c-1.9,0-3.2-1.1-3.2-3.7c0-2.6,1.3-3.7,3.2-3.7c1.9,0,3.2,1.1,3.2,3.7
                  C48.7,21.4,47.4,22.5,45.5,22.5 M50.8,35.7c0,1.7-1.7,2.9-5.4,2.9c-2.9,0-4-1.3-4-2.9c0-1.3,0.7-2.3,1.3-2.9
                  C46.1,33.8,50.8,33.3,50.8,35.7 M49.9,12.5c-1.2-0.6-2.6-0.9-4.4-0.9c-5.2,0-7.8,2.7-7.8,7.1c0,3,1.2,5.2,3.6,6.3
                  c-1,1.1-1.9,2.6-1.9,4.3c0,1,0.3,1.7,0.8,2.2c-1.1,0.6-3.5,2.3-3.5,5.1c0,3.1,2.5,5.3,8.5,5.3c6.3,0,10.2-2.8,10.2-6.8
                  c0-8.1-11.1-4.5-11.7-7.7c-0.1-0.6,0.1-1.2,0.4-1.7c0.4,0,0.9,0,1.4,0c5.2,0,7.8-2.7,7.8-7.1c0-1.5-0.3-2.7-0.8-3.8l3,0.4
                  c0.4-1,0.4-2.7,0-3.7L49.9,12.5z"></path>
                <path fill="#67676E" d="M69.1,24.5c0,2-0.8,4.6-3.6,4.6c-1.7,0-2.8-0.8-2.8-3c0-2.1,1.2-2.9,3.1-2.9c1.1,0,2.2,0.1,3.2,0.2V24.5z
                   M66.3,11.6c-4.1,0-7,1.5-7,1.5s-0.2,1,0.3,2c0.5,1,1.1,1.4,1.1,1.4s2.4-0.9,4.9-0.9c2.8,0,3.5,1.6,3.5,3.5v0.8
                  c-1.1-0.1-2.5-0.2-3.8-0.2c-4.8,0-7.5,1.8-7.5,6.1c0,4.5,2.3,6.7,6,6.7c2.8,0,4.7-1,5.6-2.8l0.7,2.1c0,0,0.8,0.3,2,0.3
                  c1.4,0,1.9-0.3,1.9-0.3V18.8C74,14,71.9,11.6,66.3,11.6"></path>
                <path fill="#67676E" d="M89.9,20.3h-6.8c0.3-3.6,1.8-4.9,3.8-4.9c2.4,0,3.1,1.6,3.1,3.6C90,19.5,89.9,19.9,89.9,20.3 M86.9,11.6
                  c-5.3,0-8.8,3.1-8.8,10.4c0,7,2.8,10.7,9.1,10.7c4.3,0,6.6-1.6,6.6-1.6c0-1.4-0.7-2.7-1.5-3.4c0,0-1.8,0.9-4.4,0.9
                  c-2.7,0-4.4-1-4.8-4.9h11.3c0,0,0.4-1.6,0.4-4.1C94.8,14.1,91.7,11.6,86.9,11.6"></path>
                <path fill="#67676E" d="M115.6,27.6c0,0-2.3,0.8-5.1,0.8c-4.1,0-7.1-2-7.1-10c0-8,3-10.1,7.1-10.1c2.5,0,4.7,0.8,4.7,0.8
                  c0.9-1,1.6-2.1,1.5-3.7c0,0-2.4-1.4-6.7-1.4c-7.6,0-11.7,5-11.7,14.3c0,9.3,4.1,14.3,11.7,14.3c4.5,0,7.1-1.4,7.1-1.4
                  C117.1,30,116.6,28.5,115.6,27.6"></path>
                <path fill="#67676E" d="M130.8,24.5c0,2-0.8,4.6-3.6,4.6c-1.7,0-2.8-0.8-2.8-3c0-2.1,1.2-2.9,3.1-2.9c1.1,0,2.2,0.1,3.2,0.2V24.5z
                   M128,11.6c-4.1,0-7,1.5-7,1.5s-0.2,1,0.3,2c0.5,1,1.1,1.4,1.1,1.4s2.4-0.9,4.9-0.9c2.8,0,3.5,1.6,3.5,3.5v0.8
                  c-1.1-0.1-2.5-0.2-3.8-0.2c-4.8,0-7.5,1.8-7.5,6.1c0,4.5,2.3,6.7,6,6.7c2.8,0,4.7-1,5.6-2.8l0.7,2.1c0,0,0.8,0.3,2,0.3
                  c1.4,0,1.9-0.3,1.9-0.3V18.8C135.7,14,133.6,11.6,128,11.6"></path>
                <path fill="#67676E" d="M142.8,3.4c-1.7,0-2.4,0.3-2.4,0.3V32c0,0,0.7,0.3,2.4,0.3c1.6,0,2.4-0.3,2.4-0.3V3.7
                  C145.3,3.7,144.4,3.4,142.8,3.4"></path>
                <path fill="#37B34A" d="M89.1,4.8c0.8-1.2,0.6-2.2-0.5-3c-1.1-0.7-2.7-0.5-3.4,0.5c-0.7,1-0.3,2.6,0.9,3.3
                  C87.1,6.4,88.3,6.1,89.1,4.8 M89.7,0.9c1.5,1,1.6,3.6,0.3,5.5c-0.8,1.2-3.5,1.6-5,0.6c-1.2-0.8-1.8-4-1.2-5.1
                  C85-0.1,87.5-0.7,89.7,0.9"></path>
                </svg>
              </a>
              <ul class="nav navbar-nav pull-right">
                <li class="tap-talk"><span>Tap to Talk</span> <a href="tel:1-800-820-0184">1-800-820-0184</a></li>
                <li class="speak-specialist"> 
                  <span class="fa-stack">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
                  </span>
                  Speak to our Bone Health Specialists</li>
              </ul>
            </div>
          </div>
        </div><!--/.container-fluid -->
      </nav>