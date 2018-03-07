<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{


		$this->load->model('dogadjajimodel','dm');
		$podaci['projekti']=$this->dm->ucitajProjekte();



				 $this->load->view('headerhome-en');
          $this->load->view('home',$podaci);
				$this->load->view('footer');

			}
    }
