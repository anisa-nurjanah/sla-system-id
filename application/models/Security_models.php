<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

	class Security_models extends CI_Model
		{
			public function get_security()
			{
				$username = $this->session->userdata('npp');
				if(empty($username))
					{
						$this->session->sess_destroy();
						redirect('/');

					}
			}

		}