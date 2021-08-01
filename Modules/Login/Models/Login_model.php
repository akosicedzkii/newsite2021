<?php

namespace App\Models;
use CodeIgniter\Model;

class Login_model extends Model
{
  public function validate_login($username, $password)
  {
		$db = \Config\Database::connect();
		$builder = $db->table('user_access');
		$query   = $builder->getWhere(['username'=>$username])->getResultArray();
		var_dump($query);
  }
}
