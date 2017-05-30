<?php
class Bootstrap{
	private $controller;
	private $action;
	private $request;

	public function __construct($request){
		$this->request = $request;
		//handles controller request
		if($this->request['controller'] == ""){
			$this->controller = 'home';
		}else{
			$this->controller = $this->request['controller'];
		}
		//handles actions request

		if($this->request['action']== ""){
			$this->action = 'index';
		}else{
			$this->action = $this->request['action'];
		}

	}

	public function createController(){
		//check if controller class exists
		if(class_exists($this->controller)){
			$parents = class_parents($this->controller);
			if(in_array("Controller", $parents)){
				if(method_exists($this->controller, $this->action)){
					return new $this->controller($this->action, $this->request);
				}else{
					//method does not exist
					echo '<h1>Method does not exist</h1>';
					return;
				}
			}else{
				//Base controller not found
				echo '<h1>Base Controller does not exist</h1>';
				return;
			}
			}else{
				echo '<h1>Controller class does not exist</h1>';
				return;
			}
		}
	}