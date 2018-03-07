<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pocetna extends CI_Controller {


	public function index()
	{


		$this->load->model('dogadjajimodel','dm');
		$podaci['projekti']=$this->dm->ucitajProjekte();
		$podaci['projektiStatus']=$this->dm->ucitajProjekteStatus();



        $this->load->view('headerhome');
        $this->load->view('pocetna',$podaci);
				$this->load->view('footer');

			}

	public function kontakt(){


						$this->load->view('header');
						$this->load->view('kontakt');
						$this->load->view('footer');

	}

	public function onama(){


				$this->load->model('dogadjajimodel','dm');
				$podaci['projekti']=$this->dm->ucitajProjekte();
$podaci['projektiStatus']=$this->dm->ucitajProjekteStatus();

		$this->load->view('header');
		$this->load->view('onama',$podaci);
		$this->load->view('footer');
	}

	public function clanovi(){


 		$this->load->model('clanovimodel','cm');
		$podaci['clanovi']=$this->cm->citajClanove();

		$this->load->view('header');
		$this->load->view('clanovi',$podaci);
		$this->load->view('footer');

	}


	public function projekat($id_projekta){



		$this->load->model('dogadjajimodel','dm');
		$podaci['projekti']=$this->dm->citajJedanProjekat($id_projekta);
		$podaci['slike']=$this->dm->projekti_slike($id_projekta);
		$podaci['projektiStatus']=$this->dm->ucitajProjekteStatus();






		$this->load->view('header');
		$this->load->view('projekat',$podaci);
		$this->load->view('footer');

	}

	public function clan($id_clana){



		$this->load->model('clanovimodel','cm');

		$podaci['clanovi']=$this->cm->citajJednogClana($id_clana);

		$podaci['session']=$this->session->all_userdata();


		$this->load->view('header');
		$this->load->view('clan',$podaci);
		$this->load->view('footer');

	}


	public function dogadjaji(){
		$this->load->model('dogadjajimodel','dm');
	  $podaci['dogadjaji']=$this->dm->ucitajDogadjaje();

		$this->load->view('header');
		$this->load->view('dogadjaji',$podaci);
		$this->load->view('footer');
	}

	public function dogadjaj($id_dogadjaj){
		$this->load->model('dogadjajimodel','dm');
		$podaci['dogadjaj']=$this->dm->ucitajJedanDogadjaj($id_dogadjaj);
		$podaci['slike']=$this->dm->dogadjaji_slike($id_dogadjaj);

		$this->load->view('header');
		$this->load->view('dogadjaj',$podaci);
		$this->load->view('footer');
	}

	public function vesti(){
		$this->load->view('header');
		$this->load->view('vesti');
		$this->load->view('footer');
	}

	public function login(){

		$podaci['username']=array(
		'value'=>'',
		'placeholder'=>"Username",
		'class'=>'form-control',
		'name'=>'username'
		);
		$podaci['password']=array(
		'value'=>'',
		'placeholder'=>"Password",
		'class'=>'form-control',
		'name'=>'password',
		'type'=>'password'
		);
		$podaci['dugme']=array(
		'name'=>'login',
		'value'=>'Login',
		'type'=>'submit',
		'content'=>'Sign in',
		'class'=>'btn btn-default'
		);

		$podaci['formaAttr'] = array(
		'name'=>'formaLogin',
		'method'=>'post',
		'class'=>'login-page'

		);




		 //Logovanje
		$username=  $this->input->post('username');
		$password=  ($this->input->post('password'));

		$this->load->model('loginmodel','lm');
		$rezultat= $this->lm->login($username,$password);



		$dugme=  $this->input->post('login');

		if($dugme!=''){

		if($rezultat['broj_redova']==1){
		$sesija=array(
		'korisnik'=>$rezultat['logovanje_redovi'][0]['ime'],
		'uloga'=>$rezultat['logovanje_redovi'][0]['naziv'],
		'id_kor'=>$rezultat['logovanje_redovi'][0]['id_korisnik'],
				'isLoggedIn'=>true
		);
		$this->session->set_userdata($sesija);

		 redirect('apdogadjaji/admindogadjaji');
		}

		else{

		redirect('pocetna/login');
		}
		}

		 $podaci['session']=$this->session->all_userdata();



		$this->load->view('header',$podaci);
		$this->load->view('login',$podaci);


	}

	//Logout

	 public function logout(){
	$this->session->sess_destroy();
	redirect('');
	}

}
