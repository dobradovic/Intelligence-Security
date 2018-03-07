<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class pristup extends CI_Controller {


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
