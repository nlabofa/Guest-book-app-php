<?php

class Guests extends Controller{
	protected function Index(){
		$viewmodel = new GuestModel();
		$this->returnView($viewmodel->Index(), true);
	}

	protected function Edit(){
		$viewmodel = new GuestModel();
		$this->returnView($viewmodel->Edit(), true);
	}
}