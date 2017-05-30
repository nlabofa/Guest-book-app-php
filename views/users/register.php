<div class="ui raised very padded container segment">
		<div class="ui centered grid">
			<div class="eight wide center aligned column">
				<img src="<?php echo ROOT_PATH; ?>assets/ace.png" width="50px;height:auto;">
				<form class="ui form left aligned six column segment" action="<?php $_SERVER['PHP_SELF']; ?>" method="post" name="form" id="form">
					<?php Messages::display(); ?>
					<div class="field">
						<label>Full Name</label>
						<input type="text" id="fullname" name="fullname" placeholder="Full Name">
					</div>
					<div class="field">
						<label>Email</label>
						<input type="email" id="email" name="email" placeholder="Email Address">
					</div>
					<div class="field">
						<label>Comment</label>
						<textarea name="comment" id="comment"></textarea>
					</div>
					<div class="field">
						<label>Password</label>
						<input type="password" id="password" name="password">
					</div>
					<div class="field">
						<div class="ui checkbox">
							<input type="checkbox" name="agree" id="agree" tabindex="0" class="hidden">
							<label for="agree">I agree to the Terms and Conditions</label>
						</div>
					</div>
					<input class="ui submit button" name="submit" type="submit" value="Submit"/>
				</form>
			</div>
		</div>
	</div>