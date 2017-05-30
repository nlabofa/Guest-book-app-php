<?php
class Messages{
	public static function setMsg($text, $type){
		if($type == 'error'){
			$_SESSION['errorMsg'] = $text;
		}elseif($type == 'success'){
			$_SESSION['successMsg'] = $text;
		}
		else{
			return;
		}
	}

	public static function display(){
		if(isset($_SESSION['errorMsg'])){
			echo '<div class="ui visible negative message">
						<i class="close icon"></i>
						<div class="header">'.$_SESSION['errorMsg'].'</div>	
					</div>';
					unset($_SESSION['errorMsg']);
		}

		if(isset($_SESSION['successMsg'])){
			echo '<div class="ui visible success message">
						<i class="close icon"></i>
						<div class="header">'.$_SESSION['successMsg'].'</div>	
					</div>';
					unset($_SESSION['successMsg']);
		}
	}
}