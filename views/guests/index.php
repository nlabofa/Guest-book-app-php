
<div class="ui raised very padded container segment">
			<div class="ui centered grid">
			    <div class="ten wide column">
			    	<img src="assets/ace.png" width="50px;height:auto;">
			    	<h1 style="margin-bottom: 0">View all Guests</h1>
			    	<div class="ui divided items">
						<?php Messages::display(); ?>
						<?php foreach($viewmodel as $guest) : ?>
				    	<div class="item">
				    	    <div class="content">
				    	      	<a class="header"><?php echo $guest['fullname']; ?></a>
				    	      	<div class="meta">
				    	        	<span class="cinema"><?php echo $guest['email']; ?></span>
				    	      	</div>
				    	      	<div class="description">
				    	        	<p><?php echo $guest['comment']; ?></p>
				    	      	</div>
				    	      	<div class="extra">
									<?php if(isset($_SESSION['is_logged_in']) && $_SESSION['user_data']['id'] == $guest['id']) : ?>	  
				    	        	<a href="<?php echo ROOT_URL;?>guests/edit">
				    	        		<button class="mini ui button">
									  		Edit
										</button>
									</a>
				    	        	<div class="ui right floated delete negative button">
							          	Delete Entry
							          	<i class="right trash outline icon"></i>
							        </div>
									<?php else: ?>
								  		<a href="<?php echo ROOT_URL;?>guests/edit">
				    	        		<button class="mini ui button">
									  		View More...
										</button>
									</a>
								  <?php endif; ?>
				    	      	</div>
								  
								 
				    	    </div>
				    	</div>
						<?php endforeach; ?>
			    	</div>
			    </div>
			</div>
		</div>

		<div class="ui small modal">
		    <div class="header">
		      Delete This Entry
		    </div>
		    <div class="content">
		      <p>Are you sure you want to delete this entry?</p>
		    </div>
		    <div class="actions">
		      <div class="ui negative button">
		        No
		      </div>
		      <div class="ui positive right labeled icon button">
		        Yes
		        <i class="checkmark icon"></i>
		      </div>
		    </div>
		  </div>