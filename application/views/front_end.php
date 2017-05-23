<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link rel="stylesheet" href="/assets/bootstrap/dist/css/bootstrap.min.css"/>

	<title>Graduation</title>
</head>
<body>


<div class="jumbotron">
	<div class="container">
		<h1>From: <?php echo $next_shout_out[0]->from; ?></h1>
		<h1>To: <?php echo $next_shout_out[0]->to; ?></h1>
		<h1>Message: <?php echo $next_shout_out[0]->message; ?></h1>

	</div>
</div>

<script>
	setTimeout(function () {
		location.reload();
	}, 5000);
</script>

<script src="/assets/jquery/dist/jquery.min.js"/>
<script src="/assets/bootstrap/dist/js/bootstrap.min.js"/>


</body>
</html>
