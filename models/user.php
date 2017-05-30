<?php

class UserModel extends Model{
	public function register(){
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		$password = md5($post['password']);

		if($post['submit']){
			
			if($post['fullname'] == '' || $post['email'] == '' || $post['comment']== '' || $post['password']== ''){
				Messages::setMsg('Please Fill In All Fields', 'error');
				return;
			}

			$this->query('INSERT INTO guests (fullname,email,comment,password) VALUES(:fullname,:email,:comment,:password)');
			$this->bind(':fullname', $post['fullname']);
			$this->bind(':email', $post['email']);
			$this->bind(':comment', $post['comment']);
			$this->bind(':password', $password);

			$this->execute();

			if($this->lastInsertId()){
				header('Location:'.ROOT_URL.'guests');
				Messages::setMsg('suceessfully Added', 'success');
			}
		}
		return;

	}

	public function login(){
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		$password = md5($post['password']);

		if($post['submit']){
			// Compare Login
			$this->query('SELECT * FROM guests WHERE email = :email AND password = :password');
			$this->bind(':email', $post['email']);
			$this->bind(':password', $password);
			
			$row = $this->single();

			if($row){
				$_SESSION['is_logged_in'] = true;
				$_SESSION['user_data'] = array(
					"id" => $row['id'],
					"fullname" => $row['fullname'],
					"email" => $row['email'],
				);
				
				header('Location: '.ROOT_URL.'guests');
				Messages::setMsg('successfully LoggedIn', 'success');
			} else {
				Messages::setMsg('Incorrect Login', 'error');
			}
		}
		return;
	}
}