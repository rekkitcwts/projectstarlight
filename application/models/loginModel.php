<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LoginModel extends CI_Model 
{
	function checkCredentials($username,$password)
	{
		if ($username == "" || $password == "")
		{
			return "Username/Password must be filled";
		}
		else
		{
		}
	}	
}

/* End of file loginModel.php */
/* Location: ./application/controllers/leagueTestModel.php */