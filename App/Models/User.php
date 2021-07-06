<?php

namespace App\Models;
use MF\Model\Model;
class User extends Model{
	public function getUsers() {
		
		$query = "select * from tb_users";
		return $this->db->query($query)->fetchAll();
	}
}

?>