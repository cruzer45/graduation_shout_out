<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link rel="stylesheet" href="assets/bootstrap/dist/css/bootstrap.min.css"/>

	<title>Graduation</title>
</head>
<body>


<div class="container">


	<div class="col-sm-6">
		<h2>Previous Shout Outs</h2>
		<hr/>

		<?php if (isset($past_shout_outs)) { ?>
			<table class="table table-hover">
				<thead>
				<tr>
					<th>To</th>
					<th>From</th>
					<th>Message</th>
				</tr>
				</thead>
				<tbody>
				<?php foreach ($past_shout_outs as $shout_out){?>

					<tr>
						<td> <?php echo $shout_out->to; ?></td>
						<td> <?php echo $shout_out->from; ?></td>
						<td> <?php echo $shout_out->message; ?></td>
					</tr>

				<?php }?>


				</tbody>
			</table>


		<?php
		} else { ?>

			<p class="text-center">There are no past shout outs.</p>

		<?php } ?>


	</div>
	<div class="col-sm-6">
		<h2>Send Shout Out</h2>
		<hr/>


		<?php if (isset($message)) { ?>

			<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong> <?php echo $message; ?> </strong>
			</div>


		<?php } ?>


		<form class="form-horizontal" action="process_shout_out" method="POST">
			<div class="form-group">
				<label for="to" class="col-sm-2 control-label">To</label>
				<div class="col-sm-10">
					<input type="text" name="to" class="form-control" id="to" placeholder="To">
				</div>
			</div>

			<div class="form-group">
				<label for="from" class="col-sm-2 control-label">From</label>
				<div class="col-sm-10">
					<input type="text" name="from" class="form-control" id="from" placeholder="From">
				</div>
			</div>

			<div class="form-group">
				<label for="message" class="col-sm-2 control-label">Message</label>
				<div class="col-sm-10">
					<textarea name="message" id="message" rows="10" class="form-control"></textarea>
				</div>
			</div>


			<div class="form-group">
				<label for="message" class="col-sm-2 control-label"> </label>
				<div class="col-sm-10">
					<button type="submit" class="btn btn-primary btn-block">Send Shout Out</button>
				</div>
			</div>

		</form>

	</div>
</div>


<script src="assets/jquery/dist/jquery.min.js"/>
<script src="assets/bootstrap/dist/js/bootstrap.js"/>

</body>
</html>
