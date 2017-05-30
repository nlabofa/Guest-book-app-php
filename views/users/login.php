<div class="ui raised very padded container segment">
		<div class="ui centered grid">
			<div class="eight wide center aligned column">
				<img src="<?php echo ROOT_PATH; ?>assets/ace.png" width="50px;height:auto;">
				<form class="ui form left aligned six column segment" method="post" action="<?php $_SERVER['PHP_SELF']; ?> ">
						<?php Messages::display(); ?>
					<div class="field">
						<label>Email</label>
						<input type="email" id="email" name="email" placeholder="Email Address">
					</div>
					<div class="field">
						<label>Password</label>
						<input type="password" id="password" name="password">
					</div>
					<input class="ui submit button" name="submit" type="submit" value="Submit"/>
				</form>
			</div>
		</div>
	</div>