<?php
class GuestModel extends Model{
	public function index(){
		$this->query('SELECT * FROM guests ORDER BY create_date DESC');
		$guests = $this->resultSet();
		if(!$guests){
			echo 'there is no guest at this time';
		}
		return $guests;
	}

	public function edit(){
		return;
	}
}