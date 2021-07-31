<?php

namespace Modules\Main\Controllers;

use App\Controllers\BaseController;

class MainController extends BaseController
{
	public function index()
	{
		$db = \Config\Database::connect();
		$builder = $db->table('site_settings');
		$query   = $builder->get()->getResultArray();
		echo view("\Modules\Main\Views\Main_view",$query[0]);
	}
}