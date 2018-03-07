<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class apdogadjaji extends CI_Controller {


	public function admindogadjaji()
	{



		$this->load->model('dogadjajimodel', 'dm' );

		$dogadjaji=$this->dm->ucitajDogadjaje();
		$this->load->library('table');

		$this->table->set_heading('Naslov', 'Tekst', 'Slika','Obrisi');
		foreach($dogadjaji as $d){

				$del=anchor('apdogadjaji/obrisiDogadjaj/'.$d->id_dogadjaj, "<i class='fa fa-times fa-2x'></i>");
				$this->table->add_row($d->naslov, $d->tekst, img($d->slika), $del);
		}



		//Izgled tagova
		$tmpl = array (
						'table_open'          => '<table class="table table-bordered table-hover">',

						'heading_row_start'   => '<tr>',
						'heading_row_end'     => '</tr>',
						'heading_cell_start'  => '<th>',
						'heading_cell_end'    => '</th>',

						'row_start'           => '<tr>',
						'row_end'             => '</tr>',
						'cell_start'          => '<td>',
						'cell_end'            => '</td>',

						'row_alt_start'       => '<tr>',
						'row_alt_end'         => '</tr>',
						'cell_alt_start'      => '<td>',
						'cell_alt_end'        => '</td>',

						'table_close'         => '</table>'
			);
		$this->table->set_template($tmpl);

		$podaci['tabela']=$this->table->generate();


		$this->load->model('dogadjajimodel','dm');

		 $podaci['naslov']=array(
				'value'=>'',
				'placeholder'=>"Naslov",
				'class'=>'form-control',
				'name'=>'tbNaslov'
				);


				$podaci['tekst']=array(
				'value'=>'',
				'placeholder'=>"Tekst",
				'class'=>'form-control',
				'name'=>'tbTekst'

				);

				$podaci['video']=array(
				'value'=>'',
				'placeholder'=>"Video link",
				'class'=>'form-control',
				'name'=>'tbVideo'

				);



				$podaci['btnUnesi']=array(
				'name'=>'btnUnesi',
				'value'=>'Unesi novi dogadjaj',
				'type'=>'submit',
				'class'=>'btn btn-default'
				);

				$podaci['formaAttr'] = array(
				'name'=>'formaEvent',
				'method'=>'post',
				'class'=>'form-horizontal'

				);

				$dodaj=$this->input->post('btnUnesi');

				 //Unos novog dogadjaja
				if($dodaj!=''){


				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']	= '900';
				$config['upload_path'] = './assets/images/';
				$config['max_width']  = '3000';
				$config['max_height']  = '3338';
				$putanja='assets/images/';
				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('fSlika')){
				$error = array('error' => $this->upload->display_errors());
				foreach($error as $err){
					echo $err;
				}
				}
				else{
					 $data=array('upload_data'=>$this->upload->data());

						$this->resize($data['upload_data']['full_path'], $data['upload_data']['file_name']);

				$dog=array(
										'naslov'=>$this->input->post('tbNaslov'),
										'tekst'=>$this->input->post('tbTekst'),
										'slika'=>$putanja.$data['upload_data']['file_name'],
										'slika_thumb'=>'images/thumb/'.$data['upload_data']['raw_name'],

											'video'=>$this->input->post('tbVideo'),


								);

								$this->dm->unesi_dogadjaj($dog);



				}
					redirect('pocetna/dogadjaji', REFRESH);

			}

			   $podaci['session']=$this->session->all_userdata();

				 $this->db->last_query();

				$this->load->view('header',$podaci);
				$this->load->view('adminpanel',$podaci);
				$this->load->view('footer');
}


//Brisanje eventa
public function obrisiDogadjaj($id){
$this->load->model('dogadjajimodel', 'dm');
$this->dm->obrisi_dogadjaj($id);
redirect('apdogadjaji/admindogadjaji');
}


public function resize($path, $file){
									 $config['image_library']='gd2';
									 $config['source_image']=$path;
									 $config['create_thumb']=TRUE;
									 $config['quality']="100%";
									 $config['width']=70;
									 $config['height']=75;
									 $config['new_image']='./images/thumb/'.$file;
									 $config['overwrite'] = TRUE;

									 $this->load->library('image_lib', $config);
									 $this->image_lib->resize();


							 }


			}
