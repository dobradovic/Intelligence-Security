<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Projekti extends CI_Controller {


	public function projekat_toc()
	{


		$this->load->model('dogadjajimodel','dm');
		$podaci['projekti']=$this->dm->ucitajProjekte();



				 $this->load->view('header');
          $this->load->view('projekat-toc',$podaci);
				$this->load->view('footer');

			}
    }
