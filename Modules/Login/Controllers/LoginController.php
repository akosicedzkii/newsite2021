<?php

namespace Modules\Login\Controllers;

use App\Controllers\BaseController;

class LoginController extends BaseController
{
	public function index()
	{
		$db = \Config\Database::connect();
		$builder = $db->table('site_settings');
		$query   = $builder->get()->getResultArray();
		echo view("\Modules\Login\Views\Login_view",$query[0]);
	}
}