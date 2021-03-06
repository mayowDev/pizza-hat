<?php 

  session_start();

  //$_SESSION['name'] = 'mario'; overide session

  if($_SERVER['QUERY_STRING'] == 'noname'){
    //unset($_SESSION['name']);
    session_unset(); //unset all sessions
  }
    // null coalesce is used as fallback
  $name = $_SESSION['name'] ?? 'Guest';

  // get cookie
  $gender = $_COOKIE['gender'] ?? 'Unknown';

?>

<head>
	<title>Pizza Hut</title>
	<!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <style type="text/css">
	  .brand{
	  	background: #cbb09c !important;
	  }
  	.brand-text{
  		color: #cbb09c !important;
  	}
	.pizza{
		width: 100px;
		margin: 40px auto -30px;
		display: block;
		position: relative;
		top: -30px;
		}
    form{
  		max-width: 460px;
  		margin: 20px auto;
  		padding: 20px;
  	}
  </style>
</head>
<body class="grey lighten-4">
	<nav class="white z-depth-0">
    <div class="container">
	  <li class="grey-text">Hello <?php echo htmlspecialchars($name); ?></li>
	  <li class="grey-text">(<?php echo htmlspecialchars($gender); ?>)</li>
      <a href="index.php" class="brand-logo brand-text">Pizza Hut</a>
      <ul id="nav-mobile" class="right hide-on-small-and-down">
        <li><a href="add.php" class="btn brand z-depth-0">Add a Pizza</a></li>
      </ul>
    </div>
  </nav>