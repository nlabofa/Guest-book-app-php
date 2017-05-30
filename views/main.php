<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>Guestbook-PHP </title>
	<script src="<?php echo ROOT_PATH; ?>assets/jquery-3.1.1.min.js"></script>
	<script src="<?php echo ROOT_PATH; ?>assets/semantic.min.js"></script>
	<link rel="stylesheet" type="text/css" class="ui" href="<?php echo ROOT_PATH; ?>assets/semantic.min.css">
</head>

<body>
	<div class="ui container menu">
		<div class="header item">
			My GuestBook
		</div>
		<a class="active item" href="<?php echo ROOT_URL; ?>">
				Home
			</a>
		<a class="item" href="<?php echo ROOT_URL; ?>guests">
		    	View all Guests
		  	</a>
        <?php if(isset($_SESSION['is_logged_in'])): ?>
        <a class="item ui-right"  href="<?php echo ROOT_URL; ?>">Welcome <?php echo $_SESSION['user_data']['fullname']; ?></a>
	    	<a class="item ui-right"  href="<?php echo ROOT_URL; ?>users/logout">Logout</a>
    <?php else : ?>
          <a class="item ui-right"  href="<?php echo ROOT_URL; ?>users/login">
				Login
			</a>
		<a class="item ui-right"  href="<?php echo ROOT_URL; ?>users/register">
		    	Register
		  	</a>
        <?php endif; ?>
        
	</div>

		
	
  <?php require($view);?>
</body>
<script type="text/javascript">
	$('.ui.checkbox')
		.checkbox();
	$('.message .close')
		.on('click', function() {
			$(this)
				.closest('.message')
				.transition('fade');
		});
    $('.small.modal')
		  .modal('attach events', '.delete.button', 'show');
		;
</script>

</html>
