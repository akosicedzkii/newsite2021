<?php

namespace Modules\Users\Controllers;

use App\Controllers\BaseController;
//use Modules\Users\Models\UsersModel;

class UsersController extends BaseController
{
	public function index()
	{
		// echo "This is simple from Student Module";

        $data = [ "name" => "Sanjay", "email" => "sanjay_kumar@gmail.com" ];

		return view("\Modules\Users\Views\Users_view", $data);
	}
  
    public function otherMethod()
	{
		echo "This is other method from Student Module";
	}
}